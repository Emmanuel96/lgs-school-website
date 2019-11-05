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

// Route::get('/login', 'AuthenticateController@login')->name('login');

//header
Route::get('/admin/edit/header','AdminController@editHeader' )->name('admin.header');
Route::post('/admin/edit/header', 'AdminController@postHeader')->name('admin.post_header');

Route::get('/admin/edit/about/{id}', 'AdminController@editAbout')->name('admin.edit_about');
Route::post('/admin/update/about/{id}', 'AdminController@postAbout')->name('admin.updateAbout');
Route::get('/admin/view/aboutView', 'AdminController@viewAbout')->name('admin.aboutView');
Route::get('/admin/edit/aboutPagedetails', 'AdminController@editPage')->name('admin.aboutPagedetails');

Route::get('/admin/edit/event', 'AdminController@editEvent')->name('admin.event');

Route::get('/admin/edit/team/{id}', 'AdminController@editTeam')->name('admin.team');
Route::post('/admin/update/team/{id}', 'AdminController@updateTeam')->name('admin.updateTeam');

Route::get('/admin/edit/addo', 'AdminController@editAddo')->name('admin.addo');
Route::post('/admin/update/addo/{id}', 'AdminController@updateAddo')->name('admin.updateAddo');
//about
Route::get('/admin/new/about', 'AdminController@newAbout')->name('admin.about');
Route::get('/admin/view/aboutView', 'AdminController@viewAbout')->name('admin.aboutView');
Route::get('/admin/edit/about/{id}', 'AdminController@editAbout')->name('admin.editAbout');
Route::post('/admin/update/about/{id}', 'AdminController@updateAbout')->name('admin.updateAbout');

//event
Route::get('/admin/new/event', 'AdminController@newEvent')->name('admin.event');
Route::get('/admin/view/eventView', 'AdminController@viewEvent')->name('admin.eventView');
Route::get('/admin/edit/event/{id}', 'AdminController@editEvent')->name('admin.editEvent');
Route::post('/admin/update/event/{id}', 'AdminController@updateEvent')->name('admin.updateEvent');
Route::get('/admin/delete/event/{id}', [
    'as' => 'admin.deleteEvent',
    'uses' => 'AdminController@deleteEvent',
]);

//addo
Route::get('/admin/edit/addo', 'AdminController@editAddo')->name('admin.addo');
Route::post('/admin/update/addo', 'AdminController@updateAddo')->name('admin.updateAddo');

//badore
Route::get('/admin/edit/badore', 'AdminController@editBadore')->name('admin.badore');
Route::post('/admin/update/badore/{id}', 'AdminController@updateBadore')->name('admin.updateBadore');
Route::post('/admin/update/badore', 'AdminController@updateBadore')->name('admin.updateBadore');

//youtube
Route::get('/admin/new/youtubeNew', 'AdminController@newYoutubeNew')->name('admin.youtubeNew');
Route::get('/admin/show/youtubeView', 'AdminController@showYoutubeView')->name('admin.youtubeView');
Route::get('/admin/edit/youtube/{id}', 'AdminController@editYoutubeVideos')->name('admin.editYouTube');
Route::post('/admin/update/youtube/{id}', 'AdminController@updateYoutubeVideos')->name('admin.updateYouTube');

//team
Route::get('/admin/new/team', 'AdminController@newTeam')->name('admin.team');
Route::get('/admin/view/teamView', 'AdminController@viewTeam')->name('admin.teamView');
Route::get('/admin/edit/team/{id}', 'AdminController@editTeam')->name('admin.editTeam');
Route::post('/admin/update/team/{id}', 'AdminController@updateTeam')->name('admin.updateTeam');

Route::get('/admin/view/login','AdminController@Login')->name('admin.login');


Route::get('/admin/view/eventImage/{id}', 'AdminController@viewEventImage')->name('admin.eventImage');
Route::get('/admin/edit/eventImage/{id}', 'AdminController@editEventImage')->name('admin.eventImage.edit');
Route::post('/admin/update/eventImage/{id}', 'AdminController@updateEventImage')->name('admin.eventImage.update');

Route::get('/home', 'HomeController@home')->name('home');

Route::post('/admin/edit/header', 'AdminController@postHeader')->name('admin.post_header');

Route::get('/admin/campus/addo/gallery/1', 'AdminController@addo_gallery');

Route::get('/admin/campus/baodre/gllery/2', 'AdminController@badore_gallery');

Route::post('/admin/addo/edit', 'AdminController@post_addo');

Route::post('/admin/badore/post', 'AdminController@post_badore');
Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

