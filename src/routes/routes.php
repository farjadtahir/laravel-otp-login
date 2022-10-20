<?php

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/login/verify', 'farjadtahir\LaravelOTPLogin\Controllers\OtpController@view')->name("otp.view");
    Route::post('/login/check', 'farjadtahir\LaravelOTPLogin\Controllers\OtpController@check' )->name("otp.verify");
});
