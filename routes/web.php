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
Route::get('/opportunity/{id}','OpportunityController@showIndex');

Route::get('/admin/opportunity','OpportunityController@form');
Route::post('/admin/opportunity','OpportunityController@storeForm');
Route::get('/admin/opportunity-request','AdminController@opportunity_list');
Route::get('/admin/opportunity-request/{id}','AdminController@opportunity_info');
Route::post('/admin/opportunity-request/{id}/accept','AdminController@opportunity_accept');
Route::post('/admin/opportunity-request/{id}/decline','AdminController@opportunity_declined');

Route::get('/admin/resource','ProductController@index');
Route::get('/admin/resource/{id}','ProductController@info');
Route::get('/admin/resource/create','ProductController@create');
Route::post('/admin/resource/create','ProductController@store');
Route::get('/admin/resource/edit/{id}','ProductController@edit');
Route::post('/admin/resource/edit/{id}','ProductController@update');



Route::get('/resources/books','ProductController@book');
Route::get('/resources/materials','ProductController@material');
Route::get('/resources/tools','ProductController@tool');
Route::get('/resources/{name}','ProductController@show');

Route::get('/admin/event','EventController@index');
Route::get('/admin/event/create','EventController@create');
Route::post('/admin/event/create','EventController@store');
Route::get('/admin/event/edit/{id}','EventController@edit');
Route::post('/admin/event/edit/{id}','EventController@update');
Route::get('/admin/event/{id}','EventController@show');

Route::get('/event/congress','EventController@seminar_index');
Route::get('/event/networking','EventController@networking_index');
Route::get('/event/{slug}','EventController@eventShow');

//certification

Route::get('/admin/certification-benefit','CertificateController@benefit');
Route::post('/admin/certification-benefit','CertificateController@postBenefit');
Route::get('/admin/certification-way','CertificateController@way_certified');
Route::post('/admin/certification-way','CertificateController@postWay_certified');
Route::get('/admin/certificate/create','CertificateController@create');
Route::post('/admin/certificate/create','CertificateController@store');
Route::get('/admin/certificate/edit/{id}','CertificateController@edit');
Route::post('/admin/certificate/edit/{id}','CertificateController@update');
Route::get('/admin/certificate','CertificateController@index');
Route::get('/admin/certificate/{id}','CertificateController@show');
Route::get('/admin/certificate/delete/{id}','CertificateController@delete');

Route::get('/certificate-list','CertificateController@certificate');
Route::get('/certificate-apply','CertificateController@list');
Route::get('/certicate/details/{name}','CertificateController@details');
// Route::get('/certicate/apply/{name}','CertificateController@apply');

Route::get('/certification-benefit','CertificateController@benefitIndex');
Route::get('/way-to-become-certified','CertificateController@wayIndex');




//category
Route::get('/admin/category','CategoryController@index');
Route::get('/admin/category/create','CategoryController@create');
Route::post('/admin/category/create','CategoryController@store');
Route::get('/admin/category/edit/{id}','CategoryController@edit');
Route::post('/admin/category/edit/{id}','CategoryController@update');
Route::get('/admin/category/delete/{id}','CategoryController@delete');

