<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RolesController;
use App\Http\Controllers\Api\PermissionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', [AuthController::class,'login']);

Route::group(['middleware' => 'auth:api'], function(){
	
	Route::get('logout', [AuthController::class,'logout']);

	Route::get('profile', [AuthController::class,'profile']);
	Route::post('change-password', [AuthController::class,'changePassword']);
	Route::post('update-profile', [AuthController::class,'updateProfile']);

	//only those have manage_user permission will get access
	Route::group(['middleware' => 'can:manage_user'], function(){
		Route::get('/users', [UserController::class,'list']);
		Route::post('/user/create', [UserController::class,'store']);
		Route::get('/user/{id}', [UserController::class,'profile']);
		Route::get('/user/delete/{id}', [UserController::class,'delete']);
		Route::post('/user/change-role/{id}', [UserController::class,'changeRole']);
	});

	//only those have manage_role permission will get access
	Route::group(['middleware' => 'can:manage_role|manage_user'], function(){
		Route::get('/roles', [RolesController::class,'list']);
		Route::post('/role/create', [RolesController::class,'store']);
		Route::get('/role/{id}', [RolesController::class,'show']);
		Route::get('/role/delete/{id}', [RolesController::class,'delete']);
		Route::post('/role/change-permission/{id}', [RolesController::class,'changePermissions']);
	});


	//only those have manage_permission permission will get access
	Route::group(['middleware' => 'can:manage_permission|manage_user'], function(){
		Route::get('/permissions', [PermissionController::class,'list']);
		Route::post('/permission/create', [PermissionController::class,'store']);
		Route::get('/permission/{id}', [PermissionController::class,'show']);
		Route::get('/permission/delete/{id}', [PermissionController::class,'delete']);
	});
	
});
