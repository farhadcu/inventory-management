<?php

use Illuminate\Support\Facades\Route;


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

Route::group(['middleware' => ['auth']], function () {

    //Department Routes
    Route::get('department', 'DepartmentController@index')->name('department');
    Route::group(['prefix' => 'department', 'as'=>'department.'], function () {
        Route::post('datatable-data', 'DepartmentController@get_datatable_data')->name('datatable.data');
        Route::post('store-or-update', 'DepartmentController@store_or_update_data')->name('store.or.update');
        Route::post('edit', 'DepartmentController@edit')->name('edit');
        Route::post('delete', 'DepartmentController@delete')->name('delete');
        Route::post('bulk-delete', 'DepartmentController@bulk_delete')->name('bulk.delete');
        Route::post('change-status', 'DepartmentController@change_status')->name('change.status');
    });

    //Employee Routes
    Route::get('employee', 'EmployeeController@index')->name('employee');
    Route::group(['prefix' => 'employee', 'as'=>'employee.'], function () {
        Route::post('datatable-data', 'EmployeeController@get_datatable_data')->name('datatable.data');
        Route::post('store-or-update', 'EmployeeController@store_or_update_data')->name('store.or.update');
        Route::post('edit', 'EmployeeController@edit')->name('edit');
        Route::post('show', 'EmployeeController@show')->name('show');
        Route::post('delete', 'EmployeeController@delete')->name('delete');
        Route::post('bulk-delete', 'EmployeeController@bulk_delete')->name('bulk.delete');
        Route::post('change-status', 'EmployeeController@change_status')->name('change.status');
    });


});
