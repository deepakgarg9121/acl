<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\GroupRequest;
use Illuminate\Http\Request;
use App\Group;
use App\Role;
use App\Permission;
use DB;
use Session;

class PermissionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Name       - index()
     * Desc       - use for get all permission list
     * Created At - 19-04-2016
     */
    public function assignToRoles(){        
        $roleIds = DB::table('group_role')->select('role_id')->lists('role_id');
        $roles = Role::whereNotIn('id', $roleIds)->get()->toArray(); 
        
        return view('admin.acl.permission.role-permissions', compact('roles','permissions'));
    }
    
    public function getPermissionToRoleData(Request $request){       
        $template = $this->_assignToRolesTemplate($request);
        return $template;
    }
    
    final private function _assignToRolesTemplate($request){        
        $permissions = Permission::all()->toArray(); 
        $rolePermission = Role::with(
                                        array('permissions'=>function($query){
                                            $query->select('name');
                                        })
                                    )->select('id')->findOrFail($request->roleId)->toArray();
       
        return view('admin.acl.template.assignToRoleTemplate', compact('permissions','rolePermission'));
    }
    
    public function saveRolePermission(Request $request){    
        $delRolePerms = DB::table('permission_role')->where('role_id', $request->role_id)->delete();   
        $role = Role::findOrFail($request->role_id);
        $role->permissions()->attach($request->perms);
        Session::flash('success', 'Permissions assigned to Role '.$role->name.' successfully');
        return redirect()->route('permissions.assignToRole');
    }
    
    
    /**** Group  Permissions  *****/
    public function assignToGroups(){        
        $groups = Group::select('id','name','label')->orderBy('id', 'desc')->get()->toArray();
        return view('admin.acl.permission.group-permissions', compact('groups'));
    }
    
    public function getPermissionToGroupData(Request $request){       
        $template = $this->_assignToGroupTemplate($request);
        return $template;
    }
    
    final private function _assignToGroupTemplate($request){        
        $permissions = Permission::all()->toArray(); 
        $groupPermission = Group::with('permissions')->select('id')->findOrFail($request->groupId)->toArray();
        $groupPermission = Group::with(
                                        array('permissions'=>function($query){
                                            $query->select('name');
                                        })
                                    )->select('id')->findOrFail($request->groupId)->toArray();
       
        return view('admin.acl.template.assignToGroupTemplate', compact('permissions','groupPermission'));
    }
    
    public function saveGroupPermission(Request $request){    
        $delGroupPerms = DB::table('group_permission')->where('group_id', $request->group_id)->delete();   
        
        $groupRolesList =   DB::table('group_role')->select('role_id')->where('group_id', $request->group_id)->lists('role_id');
        $delRolePerms = DB::table('permission_role')->whereIn('role_id', $groupRolesList)->delete();   
        
        $group = Group::findOrFail($request->group_id);
        $group->permissions()->attach($request->perms);
        
        foreach($groupRolesList as $roles){
            $role = Role::findOrFail($roles);
            $role->permissions()->attach($request->perms);
        }
        
        Session::flash('success', 'Permissions assigned to Group '.$group->name.' successfully');
        return redirect()->route('permissions.assignToGroup');
    }
}
