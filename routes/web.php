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

Route::get('/admin/edit/about', 'AdminController@editAbout')->name('admin.about');
Route::get('/admin/view/aboutView', 'AdminController@viewAbout')->name('admin.aboutView');

Route::get('/admin/edit/event', 'AdminController@editEvent')->name('admin.event');

Route::get('/admin/edit/team', 'AdminController@editTeam')->name('admin.team');

Route::get('/admin/edit/addo', 'AdminController@editAddo')->name('admin.addo');

Route::get('/admin/edit/badore', 'AdminController@editBadore')->name('admin.badore');

//youtube
Route::get('/admin/new/youtubeNew', 'AdminController@newYoutubeNew')->name('admin.youtubeNew');
Route::get('/admin/show/youtubeView', 'AdminController@showYoutubeView')->name('admin.youtubeView');
Route::get('/admin/edit/youtube/{id}', 'AdminController@editYoutubeVideos')->name('admin.editYouTube');
Route::post('/admin/update/youtube/{id}', 'AdminController@updateYoutubeVideos')->name('admin.updateYouTube');

Route::get('/admin/view/teamView', 'AdminController@viewTeam')->name('admin.teamView');

Route::get('/admin/view/eventView', 'AdminController@viewEvent')->name('admin.eventView');
Route::get('/admin/view/login','AdminController@Login')->name('admin.login');


Route::get('/admin/view/eventImage', 'AdminController@viewEventImage')->name('admin.eventImage');

Route::get('/home', 'HomeController@home')->name('home'); 

Route::post('/admin/edit/header', 'AdminController@postHeader')->name('admin.post_header'); 
Route::post('/admin/edit/about', 'AdminController@postAbout')->name('admin.about'); 

Route::get('/admin/campus/addo/gallery/1', 'AdminController@addo_gallery');

Route::get('/admin/campus/baodre/gllery/2', 'AdminController@badore_gallery'); 

Route::post('/admin/addo/edit', 'AdminController@post_addo');

Route::post('/admin/badore/post', 'AdminController@post_badore'); 
