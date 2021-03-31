<?php

/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github:https://github.com/dbrax/eticket
 * Email: epmnzava@gmail.com
 * 
 */
namespace Epmnzava\Eticket\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Epmnzava\Eticket\Skeleton\SkeletonClass
 */
class Eticket extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'eticket';
    }
}
