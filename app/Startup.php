<?php


namespace App;


use App\Core\Abstracts\Singletone;
use App\Startup\ErrorHandlerProvider;
use App\Startup\RouterProvider;

final class Startup extends Singletone
{
    protected static $running = false;

    private function __construct()
    {
        $this->registerProviders();
    }

    private function registerProviders(){
        foreach (config('app.providers') as $provider){
            call_user_func([$provider, 'init']);
        }
    }

    static function init(){
        self::start(function (){
            new self();
        });
    }
}