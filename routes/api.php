<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(
    [
        'middleware' => 'api',
        'namespace' => 'App\Http\Controllers',
        'prefix' => 'auth'
    ],
    function () {
        Route::post('register', 'AuthController@register');
        Route::post('logout', 'AuthController@logout');
        Route::get('profile', 'AuthController@profile');
        Route::post('refresh', 'AuthController@refresh');
    }
);

Route::group(
    [
        'middleware' => 'api',
        'namespace' => 'App\Http\Controllers',
        'prefix' => 'v1'
    ],
    function () {
        Route::apiResource('mobil', 'MobilController');
        Route::apiResource('kendaraan', 'KendaraanController');
        Route::apiResource('motor', 'MotorController');
    }
);

Route::group(
    [
        'namespace' => 'App\Http\Controllers',
        'prefix' => 'auth'
    ],
    function () {
        Route::post('login', 'AuthController@login');
    }
);
