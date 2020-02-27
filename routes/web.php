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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vue', function () {
    return view('landing-prueba');
});

//User
Route::get('/user/{id}', 'UserController@show')->name('user.show');
Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');
Route::put('/user/{id}', 'UserController@update')->name('user.update');
Route::delete('/user/{id}', 'UserController@destroy')->name('user.destroy');

//Group
Route::get('/group/user/{userid}', 'GroupController@index')->name('group.index'); //We pass the userId to show the ones he owns and can edit
//Route::get('/group/{id}', 'GroupController@show')->name('group.show'); We dont need a view for the group
Route::get('/group/create/', 'GroupController@create')->name('group.create');
Route::post('/group', 'GroupController@store')->name('group.store');
//Route::get('/group/{id}', 'GroupController@edit')->name('group.edit');
Route::put('/group/{id}', 'GroupController@update')->name('group.update');
Route::delete('/group/{id}', 'GroupController@destroy')->name('group.destroy');

//Project
Route::get('/project/user/{userid}', 'ProjectController@index')->name('project.index');
//Route::get('/project/{id}', 'ProjectController@show')->name('project.show'); We dont need a view for the project
Route::get('/project/create', 'ProjectController@create')->name('project.create');
Route::post('/project', 'ProjectController@store')->name('project.store');
//Route::get('/project/{id}', 'ProjectController@edit')->name('project.edit');
Route::put('/project/{id}', 'ProjectController@update')->name('project.update');
Route::delete('/project/{id}', 'ProjectController@destroy')->name('project.destroy');

//Issue
Route::get('/issue/user/{userid}', 'IssueController@index')->name('issue.index');
Route::get('/issue/{id}', 'IssueController@show')->name('issue.show');
Route::get('/issue/create', 'IssueController@create')->name('issue.create');
Route::post('/issue', 'IssueController@store')->name('issue.store');
Route::get('/issue/{id}', 'IssueController@edit')->name('issue.edit');
Route::put('/issue/{id}', 'IssueController@update')->name('issue.update');
Route::delete('/issue/{id}', 'IssueController@destroy')->name('issue.destroy');


//Media
Route::post('/media', 'ProjectController@store')->name('media.store');
Route::delete('/media', 'MediaController@destroy')->name('media.destroy');


//Comment
Route::post('/comment', 'CommentController@store')->name('comment.store');
Route::put('/comment', 'CommentController@update')->name('comment.update');
Route::delete('/comment', 'CommentController@destroy')->name('comment.destroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
