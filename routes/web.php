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
<<<<<<< HEAD
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
=======
    'as' => 'dashboard.main.tags.',
    'prefix' => 'dashboard/tags',
    'namespace' => 'App\Http\Controllers\Backend\__Main',
    'middleware' => ['auth', 'verified'],
], function(){
    Route::get('chart', 'TagController@chart')->name('chart');
    Route::get('active/{id}', 'TagController@active')->name('active');
    Route::get('activities', 'TagController@activity')->name('activity');
    Route::get('delete/{id}', 'TagController@delete')->name('delete');
    Route::get('delete-permanent/{id}', 'TagController@delete_permanent')->name('delete-permanent');
    Route::get('inactive/{id}', 'TagController@inactive')->name('inactive');
    Route::get('restore/{id}', 'TagController@restore')->name('restore');
    Route::get('selected-active', 'TagController@selected_active')->name('selected-active');
    Route::get('selected-inactive', 'TagController@selected_inactive')->name('selected-inactive');
    Route::get('selected-delete', 'TagController@selected_delete')->name('selected-delete');
    Route::get('selected-delete-permanent', 'TagController@selected_delete_permanent')->name('selected-delete-permanent');
    Route::get('selected-restore', 'TagController@selected_restore')->name('selected-restore');
    Route::get('trash', 'TagController@trash')->name('trash');
    Route::resource('/', 'TagController')->parameters(['' => 'id']);
});

Route::group([
    'as' => 'dashboard.main.categories.',
    'prefix' => 'dashboard/categories',
    'namespace' => 'App\Http\Controllers\Backend\__Main',
    'middleware' => ['auth', 'verified'],
], function(){
    Route::get('chart', 'CategoryController@chart')->name('chart');
    Route::get('active/{id}', 'CategoryController@active')->name('active');
    Route::get('activities', 'CategoryController@activity')->name('activity');
    Route::get('delete/{id}', 'CategoryController@delete')->name('delete');
    Route::get('delete-permanent/{id}', 'CategoryController@delete_permanent')->name('delete-permanent');
    Route::get('inactive/{id}', 'CategoryController@inactive')->name('inactive');
    Route::get('restore/{id}', 'CategoryController@restore')->name('restore');
    Route::get('selected-active', 'CategoryController@selected_active')->name('selected-active');
    Route::get('selected-inactive', 'CategoryController@selected_inactive')->name('selected-inactive');
    Route::get('selected-delete', 'CategoryController@selected_delete')->name('selected-delete');
    Route::get('selected-delete-permanent', 'CategoryController@selected_delete_permanent')->name('selected-delete-permanent');
    Route::get('selected-restore', 'CategoryController@selected_restore')->name('selected-restore');
    Route::get('trash', 'CategoryController@trash')->name('trash');
    Route::resource('/', 'CategoryController')->parameters(['' => 'id']);
});

Route::group([
    'as' => 'dashboard.main.contents.',
    'prefix' => 'dashboard/contents',
    'namespace' => 'App\Http\Controllers\Backend\__Main',
    'middleware' => ['auth', 'verified'],
], function(){
    Route::get('chart', 'ContentController@chart')->name('chart');
    Route::get('active/{id}', 'ContentController@active')->name('active');
    Route::get('activities', 'ContentController@activity')->name('activity');
    Route::get('delete/{id}', 'ContentController@delete')->name('delete');
    Route::get('delete-permanent/{id}', 'ContentController@delete_permanent')->name('delete-permanent');
    Route::get('inactive/{id}', 'ContentController@inactive')->name('inactive');
    Route::get('restore/{id}', 'ContentController@restore')->name('restore');
    Route::get('selected-active', 'ContentController@selected_active')->name('selected-active');
    Route::get('selected-inactive', 'ContentController@selected_inactive')->name('selected-inactive');
    Route::get('selected-delete', 'ContentController@selected_delete')->name('selected-delete');
    Route::get('selected-delete-permanent', 'ContentController@selected_delete_permanent')->name('selected-delete-permanent');
    Route::get('selected-restore', 'ContentController@selected_restore')->name('selected-restore');
    Route::get('trash', 'ContentController@trash')->name('trash');
    Route::resource('/', 'ContentController')->parameters(['' => 'id']);
>>>>>>> e496115e19e44b7cc00b8e745d1d4fa6d6aa5f72
});