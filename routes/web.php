<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@home');

Route::get('/login', 'AuthenticateController@login')->name('login'); 

Route::get('/admin/edit/header','AdminController@editHeader' )->name('admin.header');

Route::get('/admin/edit/about/{id}', 'AdminController@editAbout')->name('admin.edit_about');
Route::post('/admin/update/about/{id}', 'AdminController@updateAbout')->name('admin.updateAbout');
Route::get('/admin/view/aboutView', 'AdminController@viewAbout')->name('admin.aboutView');
Route::get('/admin/edit/aboutPagedetails', 'AdminController@editPage')->name('admin.aboutPagedetails');

Route::get('/admin/edit/event', 'AdminController@editEvent')->name('admin.event');

Route::get('/admin/edit/team/{id}', 'AdminController@editTeam')->name('admin.team');
Route::post('/admin/update/team/{id}', 'AdminController@updateTeam')->name('admin.updateTeam');

Route::get('/admin/edit/addo', 'AdminController@editAddo')->name('admin.addo');
Route::post('/admin/update/addo/{id}', 'AdminController@updateAddo')->name('admin.updateAddo');

Route::get('/admin/edit/badore', 'AdminController@editBadore')->name('admin.badore');
Route::post('/admin/update/badore/{id}', 'AdminController@updateBadore')->name('admin.updateBadore');

Route::get('/admin/new/youtubeNew', 'AdminController@newYoutubeNew')->name('admin.youtubeNew');

Route::get('/admin/edit/youtubeView', 'AdminController@newYoutubeView')->name('admin.youtubeView');

Route::get('/admin/view/teamView', 'AdminController@viewTeam')->name('admin.teamView');

Route::get('/admin/view/eventView', 'AdminController@viewEvent')->name('admin.eventView');
Route::get('/admin/view/login','AdminController@Login')->name('admin.login');


Route::get('/admin/view/eventImage', 'AdminController@viewEventImage')->name('admin.eventImage');

Route::get('/home', 'HomeController@home')->name('home'); 

Route::post('/admin/edit/header', 'AdminController@postHeader')->name('admin.post_header');

