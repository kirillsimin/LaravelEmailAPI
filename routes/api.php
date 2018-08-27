<?php

use Illuminate\Http\Request;

Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::apiResource('emails', 'Api\EmailController');
});
