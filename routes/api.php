<?php

use Illuminate\Http\Request;

Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::post('logout', 'Api\AuthController@logout');
    Route::apiResource('emails', 'Api\EmailController');
});
