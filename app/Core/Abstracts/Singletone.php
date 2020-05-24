<?php


namespace App\Core\Abstracts;

abstract class Singletone
{
    protected static $running = false;

    protected static function start(callable $callback){
        if(static::$running == false){
            static::$running = true;
            $callback();
        }
    }
}