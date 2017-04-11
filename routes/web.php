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

Route::group(['domain' => 'app.accurate' . env('APP_TLD')], function () {
    Route::group(['prefix' => 'api'], function () {
        Route::delete('chart-of-accounts/{chartOfAccount}', 'ChartOfAccountController@destroy');
        Route::get('chart-of-accounts', 'ChartOfAccountController@index');
        Route::patch('chart-of-accounts/{chartOfAccount}', 'ChartOfAccountController@update');
        Route::post('chart-of-accounts', 'ChartOfAccountController@store');
    });

    Route::get('/', function () {
        return view('app');
    });

    Route::get('{any?}', function () {
        return view('app');
    })->where('any', '.*');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
