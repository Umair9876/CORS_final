<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\PostController;
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
Route::post('register', 'PassportAuthController@register');
Route::post('login','PassportAuthController@login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    // return $request->user();
    Route::get('user-detail', 'PassportAuthController@userDetail');

});
Route::get('/get/complaints/{user_id}', 'Api\ApiComplaintController@getComplaints');
Route::post('/register/complaint', 'Api\ApiComplaintController@registerComplaint');

Route::post('/feedback', 'Api\ApiComplaintController@addFeedback');

Route::post('/update/profile', 'Api\ApiComplaintController@updateProfile');
