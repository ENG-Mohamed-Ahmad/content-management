<?php
namespace App\Hello;

use Illuminate\Support\Facades\Facade;

class HelloFacade extends Facade
{
    public static function getFacadeAccessor(){
        return "coca-cola";
    }
}

?>