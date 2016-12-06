<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use DB;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function accessMediasAll()
    {
         return true;
    }
    
    public function roles(){
		return $this->belongsToMany('\App\Role');
    }

    public function hasRole($role){
		if(is_string($role)){ 
			return $this->roles->contains('name',$role);
		}
		return !! $role->intersect($this->roles)->count();
    }
    
    public function checkPerms($perm){
		if(is_string($perm)){  
           
            $roleId = Auth::user()->roles()->select('id')->get()->toArray();
            $roleId = $roleId[0]['id'];
            $data = DB::table('roles as r')
                        ->join('permission_role as pr', 'r.id', '=', 'pr.role_id')
                        ->join('permissions as p', 'p.id', '=', 'pr.permission_id')
                        ->select('p.name')
                        ->where('r.id', $roleId)
                        ->Where('p.name', $perm)
                        ->get();
			return count($data);;
		}
    }
	
	public function assign($role){
		if(is_string($role)){
			return $this->roles()->save(
										\App\Role::whereName($role)->firstOrFail()
									);
		}
		return $this->roles()->save($role);
	}

}
