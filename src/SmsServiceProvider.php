<?php

namespace tamirlgroup\smsrl;

use Illuminate\Support\ServiceProvider;


class SmsServiceProvider extends ServiceProvider
{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'Smsrl');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/sms.php','sms');
    }

    public function register(){

    }
}
