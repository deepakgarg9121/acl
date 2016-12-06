<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use App\Role;
use DB;
use Session;

class RoleController extends Controller
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
     * Desc       - use for get all role list
     * Created At - 19-04-2016
     */
    public function index(){ 
        $roles = Role::orderBy('id', 'desc')->get();
        return view('admin.acl.role.index',compact('roles'));
    }
    
    /**
     * Name       - create()
     * Desc       - use for openn create form for new role 
     * Created At - 19-04-2016
     */
    public function create(){ 
        return view('admin.acl.role.create');
    }
    
    /**
     * Name       - store()
     * Desc       - use for create new role
     * Created At - 19-04-2016
     */
    public function store(RoleRequest $request,Role $role){
        $id = $role->create($request->all());
        if($id['id'])
            Session::flash('success', 'Role successfully created!');
        else    
            Session::flash('error', 'Some Error Occured');
        return redirect()->route('role.index');
    }
    
    /**
     * Name       - show()
     * Desc       - use for open edit form for old role
     * Created At - 19-04-2016
     */
    public function show($id){ 
        $role = Role::findOrFail($id);
        return view('admin.acl.role.show',compact('role'));
    }
    
    /**
     * Name       - update()
     * Desc       - use for update role
     * Created At - 19-04-2016
     */
    public function update($id, RoleRequest $request){ 
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->label = $request->label;
        if($role->save())
            Session::flash('success', 'Role successfully edited!');
        else    
            Session::flash('error', 'Some Error Occured');
        return redirect()->route('role.index');
    }
    
    /**
     * Name       - destroy()
     * Desc       - use for delete role
     * Created At - 19-04-2016
     */
    public function destroy($id){ 
        $role = Role::findOrFail($id)->delete();
        if($role)
            Session::flash('success', 'Role successfully deleted!');
        else    
            Session::flash('error', 'Some Error Occured');
        return redirect()->route('role.index');
    }
}
