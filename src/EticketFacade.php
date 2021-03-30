<?php

namespace Epmnzava\Eticket;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Epmnzava\Eticket\Skeleton\SkeletonClass
 */
class EticketFacade extends Facade
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
