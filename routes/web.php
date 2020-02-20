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
    //return view('welcome');

    $user = \App\User::first();

    $projects = \App\Project::all();

    //$user->projectsBelongTo()->attach($projects);
    //$user->projectsBelongTo()->attach([1, 3, 4]);
    //$user->projectsBelongTo()->detach($projects);
    //$user->projectsBelongTo()->sync($projects);
    //$user->projectsBelongTo()->syncWithoutDetaching([1, 3, 4]);
    //$user = \App\User::find(1)->projectsBelongTo()->get();
    //\App\Project::find(1)->usersBelongTo()->get();

    echo \App\User::find(13)->projectsCreated()->get();
    //dd($user);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
