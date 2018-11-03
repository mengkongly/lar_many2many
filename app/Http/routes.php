<?php
use App\User;
use App\Model\Role;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}/role',function($id){
    return User::findOrFail($id)->roles;

});

Route::get('/user/{id}/in_role',function($id){
    $user   =   User::findOrFail($id);
    // it will add Visitor to Role table and automatic add in role_user table 
    $user->roles()->save(new Role(['name'=>'Visitor']));
});


