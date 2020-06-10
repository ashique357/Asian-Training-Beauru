<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});



Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/president-message', 'HomeController@president');
Route::get('/our-team', 'HomeController@team');
Route::get('/our-team/{id}', 'HomeController@teamMember');

Route::get('/way-to-become-a-member', 'HomeController@wayOfMember');
Route::get('/benefit-of-membership', 'HomeController@benefitMember');


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
Route::post('/banner','AdminController@banner');
// Route::post('/course','AdminController@course');

//courses
// Route::get('/admin/courses','CourseController@index');
// Route::get('/admin/course-create','CourseController@create');
// Route::post('/admin/course-create','CourseController@store');
// Route::get('/admin/course-update/{id}','CourseController@edit');
// Route::post('/admin/course-update/{id}','CourseController@update');
// Route::post('/admin/course-delete/{id}','CourseController@delete');

Route::get('admin/about-us','AdminController@about_index');
Route::post('admin/about-us','AdminController@storeIndex');

Route::get('admin/president-message','AdminController@pmIndex');
Route::post('admin/president-message','AdminController@pmStore');

Route::get('/admin/team','TeamController@index');
Route::get('/admin/team-create','TeamController@create');
Route::post('/admin/team-create','TeamController@store');
Route::get('/admin/team/edit/{id}','TeamController@edit');
Route::post('/admin/team/edit/{id}','TeamController@update');
Route::post('/admin/team/delete/{id}','TeamController@delete');

//Membership

Route::get('/admin/way-to-become-member','AdminController@way');
Route::post('/admin/way-to-become-member','AdminController@way_store');

Route::get('/admin/benefit-of-membership','AdminController@benefit');
Route::post('/admin/benefit-of-membership','AdminController@benefitStore');

Route::get('/admin/membership-request','AdminController@indexMember');
Route::get('/admin/membership-request/{id}','AdminController@info');
Route::post('/admin/membership-request/{id}/accept','AdminController@accept');
