<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/president-message', 'HomeController@president');


Route::get('/way-to-become-a-member', 'HomeController@wayOfMember');
Route::get('/benefit-of-membership', 'HomeController@benefitMember');


Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/login/{provider}/callback','Auth\LoginController@handleProviderCallback');

// Admin routes
Route::get('/admin/dashboard','AdminController@index');
Route::get('/admin/landing-page-setup','AdminController@landing');

//member-application
Route::get('/member/registration','MemberController@index');
Route::post('/member/registration','MemberController@store');


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

Route::get('/admin/about-us','AdminController@about_index');
Route::post('/admin/about-us','AdminController@storeIndex');

Route::get('/admin/president-message','AdminController@pmIndex');
Route::post('/admin/president-message','AdminController@pmStore');

//team
Route::get('/admin/team','TeamController@index');
Route::get('/admin/team-create','TeamController@create');
Route::post('/admin/team-create','TeamController@store');
Route::get('/admin/team/edit/{id}','TeamController@edit');
Route::post('/admin/team/edit/{id}','TeamController@update');
Route::post('/admin/team/delete/{id}','TeamController@delete');

Route::get('/our-team', 'TeamController@team');
Route::get('/our-team/{id}', 'TeamController@teamMember');

//Membership

Route::get('/admin/way-to-become-member','AdminController@way');
Route::post('/admin/way-to-become-member','AdminController@way_store');

Route::get('/admin/benefit-of-membership','AdminController@benefit');
Route::post('/admin/benefit-of-membership','AdminController@benefitStore');

Route::get('/admin/membership-request','AdminController@indexMember');
Route::get('/admin/membership-request/{id}','AdminController@info');
Route::post('/admin/membership-request/{id}/accept','AdminController@accept');
Route::post('/admin/membership-request/{id}/decline','AdminController@declined');

//search member verification
Route::get('/member-verify','MemberController@search');
Route::post('/member-verify','MemberController@searchResult');

//opportunity
Route::get('/member/opportunity','OpportunityController@index');
route::post('/member/opportunity','OpportunityController@store');

Route::get('/opportunity/trainings','OpportunityController@training');
Route::get('/opportunity/jobs','OpportunityController@job');
Route::get('/opportunity/consultations','OpportunityController@cons');

Route::get('/admin/opportunity','OpportunityController@form');
Route::post('/admin/opportunity','OpportunityController@storeForm');
Route::get('/admin/opportunity-request','AdminController@opportunity_list');
Route::get('/admin/opportunity-request/{id}','AdminController@opportunity_info');
Route::post('/admin/opportunity-request/{id}/accept','AdminController@opportunity_accept');
Route::post('/admin/opportunity-request/{id}/decline','AdminController@opportunity_declined');