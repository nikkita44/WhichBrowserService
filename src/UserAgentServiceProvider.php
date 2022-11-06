<?php

namespace Nick44\UserAgent;

use Illuminate\Support\ServiceProvider;

class UserAgentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(UserAgentClientServiceInterface::class, function(){
            return new WhichBrowserService();
        });
    }
}
