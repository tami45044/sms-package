<?php
use Illuminate\Http\Request;

Route::group(['namespace'=>'tamirlgroup\smsrl\Http\Controllers'], function(){
    Route::get('sms','SmsController@index')->name('sms');
    Route::post('sms','SmsController@send');
});

