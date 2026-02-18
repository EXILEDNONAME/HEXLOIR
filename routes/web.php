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
    'as' => 'dashboard.main.archives.',
    'prefix' => 'dashboard/archives',
    'namespace' => 'App\Http\Controllers\Backend\__Main',
    'middleware' => ['auth', 'verified'],
], function(){
    Route::get('chart', 'ArchiveController@chart')->name('chart');
    Route::get('active/{id}', 'ArchiveController@active')->name('active');
    Route::get('activities', 'ArchiveController@activity')->name('activity');
    Route::get('delete/{id}', 'ArchiveController@delete')->name('delete');
    Route::get('delete-permanent/{id}', 'ArchiveController@delete_permanent')->name('delete-permanent');
    Route::get('inactive/{id}', 'ArchiveController@inactive')->name('inactive');
    Route::get('restore/{id}', 'ArchiveController@restore')->name('restore');
    Route::get('selected-active', 'ArchiveController@selected_active')->name('selected-active');
    Route::get('selected-inactive', 'ArchiveController@selected_inactive')->name('selected-inactive');
    Route::get('selected-delete', 'ArchiveController@selected_delete')->name('selected-delete');
    Route::get('selected-delete-permanent', 'ArchiveController@selected_delete_permanent')->name('selected-delete-permanent');
    Route::get('selected-restore', 'ArchiveController@selected_restore')->name('selected-restore');
    Route::get('trash', 'ArchiveController@trash')->name('trash');
    Route::resource('/', 'ArchiveController')->parameters(['' => 'id']);
});