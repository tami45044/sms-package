<?php
use Illuminate\Http\Request;

Route::group(['namespace'=>'rlgroups\Smsrl\Http\Controllers'], function(){
    Route::get('sms','SmsController@index')->name('sms');
    Route::post('sms','SmsController@send');
});

