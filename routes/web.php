<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.frontend.index');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/backend/dashboard.php';
require __DIR__ . '/backend/language.php';
require __DIR__ . '/backend/administrative/application.php';
require __DIR__ . '/backend/administrative/database.php';
require __DIR__ . '/backend/administrative/management.php';
require __DIR__ . '/backend/administrative/session.php';

require __DIR__ . '/backend/application/datatable.php';

Route::group([
    'as' => 'dashboard.main.posts.',
    'prefix' => 'dashboard/posts',
    'namespace' => 'App\Http\Controllers\Backend\__Main',
    'middleware' => ['auth', 'verified'],
], function(){
    Route::get('chart', 'PostController@chart')->name('chart');
    Route::get('active/{id}', 'PostController@active')->name('active');
    Route::get('activities', 'PostController@activity')->name('activity');
    Route::get('delete/{id}', 'PostController@delete')->name('delete');
    Route::get('delete-permanent/{id}', 'PostController@delete_permanent')->name('delete-permanent');
    Route::get('inactive/{id}', 'PostController@inactive')->name('inactive');
    Route::get('restore/{id}', 'PostController@restore')->name('restore');
    Route::get('selected-active', 'PostController@selected_active')->name('selected-active');
    Route::get('selected-inactive', 'PostController@selected_inactive')->name('selected-inactive');
    Route::get('selected-delete', 'PostController@selected_delete')->name('selected-delete');
    Route::get('selected-delete-permanent', 'PostController@selected_delete_permanent')->name('selected-delete-permanent');
    Route::get('selected-restore', 'PostController@selected_restore')->name('selected-restore');
    Route::get('trash', 'PostController@trash')->name('trash');
    Route::resource('/', 'PostController')->parameters(['' => 'id']);
});

Route::group([
    'as' => 'dashboard.main.posts.',
    'prefix' => 'dashboard/posts',
    'namespace' => 'App\Http\Controllers\Backend\__Main',
    'middleware' => ['auth', 'verified'],
], function(){
    Route::get('chart', 'PostController@chart')->name('chart');
    Route::get('active/{id}', 'PostController@active')->name('active');
    Route::get('activities', 'PostController@activity')->name('activity');
    Route::get('delete/{id}', 'PostController@delete')->name('delete');
    Route::get('delete-permanent/{id}', 'PostController@delete_permanent')->name('delete-permanent');
    Route::get('inactive/{id}', 'PostController@inactive')->name('inactive');
    Route::get('restore/{id}', 'PostController@restore')->name('restore');
    Route::get('selected-active', 'PostController@selected_active')->name('selected-active');
    Route::get('selected-inactive', 'PostController@selected_inactive')->name('selected-inactive');
    Route::get('selected-delete', 'PostController@selected_delete')->name('selected-delete');
    Route::get('selected-delete-permanent', 'PostController@selected_delete_permanent')->name('selected-delete-permanent');
    Route::get('selected-restore', 'PostController@selected_restore')->name('selected-restore');
    Route::get('trash', 'PostController@trash')->name('trash');
    Route::resource('/', 'PostController')->parameters(['' => 'id']);
});