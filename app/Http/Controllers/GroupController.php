<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\GroupRequest;
use Illuminate\Http\Request;
use App\Group;
use App\Role;
use DB;
use Session;

class GroupController extends Controller
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
     * Desc       - use for get all group list
     * Created At - 19-04-2016
     */
    public function index(){
        $groups = Group::orderBy('id', 'desc')->get();
        return view('admin.acl.group.index',compact('groups'));
    }
    
    /**
     * Name       - create()
     * Desc       - use for openn create form for new group 
     * Created At - 19-04-2016
     */
    public function create(){ 
        return view('admin.acl.group.create');
    }
    
     /**
     * Name       - store()
     * Desc       - use for create new group
     * Created At - 19-04-2016
     */
    public function store(GroupRequest $request,Group $group){
        $id = $group->create($request->all());
        if($id['id'])
            Session::flash('success', 'Group successfully created!');
        else    
            Session::flash('error', 'Some Error Occured');
        return redirect()->route('group.index');
    }
    
    /**
     * Name       - show()
     * Desc       - use for open edit form for old group
     * Created At - 19-04-2016
     */
    public function show($id){ 
        $group = Group::findOrFail($id);
        return view('admin.acl.group.show',compact('group'));
    }
    
    /**
     * Name       - update()
     * Desc       - use for update group
     * Created At - 19-04-2016
     */
    public function update($id, GroupRequest $request){ 
        $group = Group::findOrFail($id);
        $group->name = $request->name;
        $group->label = $request->label;
        if($group->save())
            Session::flash('success', 'Group successfully edited!');
        else    
            Session::flash('error', 'Some Error Occured');
        return redirect()->route('group.index');
    }
    
     /**
     * Name       - destroy()
     * Desc       - use for delete group
     * Created At - 19-04-2016
     */
    public function destroy($id){ 
        $group = Group::findOrFail($id)->delete();
        $delGroupRoles = DB::table('group_role')->where('group_id', $id)->delete();
        $delGroupPerms = DB::table('group_permission')->where('group_id', $id)->delete();   
        if($group)
            Session::flash('success', 'Group successfully deleted!');
        else    
            Session::flash('error', 'Some Error Occured');
        return redirect()->route('group.index');
    }
    
     /**
     * Name       - getMemberToGroup()
     * Desc       - use for open form for assign group roles
     * Created At - 20-04-2016
     */
    public function getMemberToGroup(){ 
        $groups = Group::select('id','name','label')->orderBy('id', 'desc')->get()->toArray();
        $roles = Role::select('id','name')->orderBy('id', 'desc')->get()->toArray();
        return view('admin.acl.group.group-members',compact('groups','roles'));
    }
    
    /**
     * Name       - postMemberToGroup()
     * Desc       - use for assign group roles
     * Created At - 20-04-2016
     */
    public function postMemberToGroup(GroupRequest $request){ 
        if($request->roleGroup){
            $delGroupRole = DB::table('group_role')->where('group_id', $request->roleGroup)->delete();
            $delSameRoleOfOther = DB::table('group_role')->whereIn('role_id', $request->roleForGroup)->delete();
            $group = Group::findOrFail($request->roleGroup);
            $group->roles()->attach($request->roleForGroup);
            
            $delRolePerms = DB::table('permission_role')->whereIn('role_id', $request->roleForGroup)->delete();
            $groupPermsList =   DB::table('group_permission')->select('permission_id')->where('group_id', $request->roleGroup)->lists('permission_id');
            if(count($groupPermsList)){
                foreach($request->roleForGroup as $roles){
                    $role = Role::findOrFail($roles);
                    $role->permissions()->attach($groupPermsList);
                }
            }
            Session::flash('success', 'Role assigned to group '.$group->name.' successfully');
            return redirect()->route('group.groupmember');
        }  
    }
    
    /**
     * Name       - postMemberToGroup()
     * Desc       - use for assign group roles
     * Created At - 20-04-2016
     */
    public function getGrouproles(){ 
        $groups = Group::select('id','name','label')->orderBy('id', 'desc')->get()->toArray();
        return view('admin.acl.group.group-roles',compact('groups'));
    }
    
    /**
     * Name       - PostGrouproles()
     * Desc       - use for assign new role to group
     * Created At - 20-04-2016
     */
    public function PostGrouproles(Request $request){ 
        $group = $this->_rolesTemplate($request);
        echo $group;
    }
    
    /**
     * Name       - _rolesTemplate()
     * Desc       - use for get template with group roles
     * Created At - 20-04-2016
     */
    final private function _rolesTemplate($request){ 
        $groupData = Group::with('roles')->select('id','name')->findOrFail($request->groupId)->toArray();
        return view('admin.acl.template.groupRoleTemplate' , compact('groupData'));
    }
    
    /**
     * Name       - selectedRoles()
     * Desc       - use for get selected roles
     * Created At - 20-04-2016
     */
    public function selectedRoles(Request $request){ 
        $groupData = Group::with(
                                    array('roles'=>function($query){
                                        $query->select('id');
                                    })
                                )->select('id')->findOrFail($request->groupId)->toArray();
        return $groupData['roles'];
    }
}
