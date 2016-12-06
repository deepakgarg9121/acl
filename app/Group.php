<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable =  ['name', 'label'];
    
    public function roles(){
		return $this->belongsToMany('App\Role');
	}

	public function assign(\App\Role $role){
		return $this->roles()->save($role);
	}
    
    public function permissions(){
		return $this->belongsToMany('App\Permission');
	}

	
}
