<?php


namespace App\Startup;


use App\Core\Abstracts\Singletone;
use App\Core\Interfaces\ProviderInterface;
use Klein\Klein;

final class RouterProvider extends Singletone implements ProviderInterface
{
    protected static $running = false;
    protected static $router;

    public function __construct()
    {
        //router init
        self::$router = new Klein();
        $this->mapRoutes('web');
        //router run
        self::$router->dispatch();
    }

    static function init(){
        self::start(function (){
            new self();
        });
    }

    private function mapRoutes(string $name){
        $router = self::$router;
        require_once path(config('router.path') . "/{$name}.php");
    }

    static function request(){
        return self::$router->request();
    }

    static function response(){
        return self::$router->response();
    }
}