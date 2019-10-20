<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::post('datatable/indexAjax','ejemploDatatableController@indexAjax');
Route::get('datatable/show/{id}','ejemploDatatableController@indexAjax')->name('datatable.show');
Route::get('datatable/update/{id}','ejemploDatatableController@indexAjax')->name('datatable.edit');