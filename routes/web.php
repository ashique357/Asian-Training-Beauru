<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');

// Admin routes
Route::get('/admin/dashboard','AdminController@index');
Route::get('/admin/landing-page-setup','AdminController@landing');
//member-individual
Route::get('/member/registration','MemberController@person_index');
Route::post('/member/registration','MemberController@post_memberPerson');
//member-training provider
Route::get('/member/training-provider/registration','MemberController@trainer_index');
Route::post('/member/training-provider/registration','MemberController@post_trainer');

//corporate member
Route::get('/member/corporate/registration','MemberController@organization_index');
Route::post('/member/corporate/registration','MemberController@post_organization');

Route::post('/top-nav','AdminController@topNav');
// Route::post('/banner','AdminController@banner');