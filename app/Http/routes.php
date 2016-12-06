<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

 Route::get('test', function(){
      echo 'It is work!!!';die;
});
Route::auth();

Route::group(['middleware' => 'auth'], function () {
    Route::get('group/memeber',['as'=>'group.groupmember','uses'=>'GroupController@getMemberToGroup']);
    Route::post('group/memeber',['as'=>'group.groupmember','uses'=>'GroupController@postMemberToGroup']);
    Route::get('group/roles',['as'=>'group.grouproles','uses'=>'GroupController@getGrouproles']);
    Route::post('group/roles',['as'=>'group.grouproles','uses'=>'GroupController@postGrouproles']);
    Route::post('group/selectedroles',['as'=>'group.selectedroles','uses'=>'GroupController@selectedRoles']);
   
    Route::get('permissions/assignToRole',['as'=>'permissions.assignToRole','uses'=>'PermissionController@assignToRoles']);
    Route::post('permissions/rolePerms',['as'=>'permissions.rolePerms','uses'=>'PermissionController@getPermissionToRoleData']);
    Route::post('permissions/saveRolePerms',['as'=>'permissions.saveRolePerms','uses'=>'PermissionController@saveRolePermission']);
    
    Route::get('permissions/assignToGroup',['as'=>'permissions.assignToGroup','uses'=>'PermissionController@assignToGroups']);
    Route::post('permissions/groupPerms',['as'=>'permissions.groupPerms','uses'=>'PermissionController@getPermissionToGroupData']);
    Route::post('permissions/saveGroupPerms',['as'=>'permissions.saveGroupPerms','uses'=>'PermissionController@saveGroupPermission']);
    
    Route::get('/error/error_500', 'ErrorController@error_500');
    Route::resource('role','RoleController');
    Route::resource('group','GroupController');
    Route::resource('acl','AclController');


    Route::get('class',['as'=>'class.index','uses'=>'ClassController@index','middleware' => ['acl'],'permissions'=>'view_class']);
    Route::get('class/create',['as'=>'class.create','uses'=>'ClassController@create','middleware' => ['acl'],'permissions'=>'add_class']);
    Route::post('class',['as'=>'class.store','uses'=>'ClassController@store','middleware' => ['acl'],'permissions'=>'add_class']);
    Route::get('class/{class}',['as'=>'class.show','uses'=>'ClassController@show','middleware' => ['acl'],'permissions'=>'view_class']);
    Route::get('class/{class}/edit',['as'=>'class.edit','uses'=>'ClassController@edit','middleware' => ['acl'],'permissions'=>'edit_class']);
    Route::put('class/{class}',['as'=>'class.update','uses'=>'ClassController@update','middleware' => ['acl'],'permissions'=>'edit_class']);
    Route::delete('class/{class}',['as'=>'class.destroy','uses'=>'ClassController@destroy','middleware' => ['acl'],'permissions'=>'delete_class']);
    
    Route::get('/', 'AclController@index');
    Route::get('/check', 'AclController@check');
    
});    
