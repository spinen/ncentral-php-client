<?php

namespace Spinen\Ncentral\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Ncentral
 *
 * @package Spinen\Ncentral\Laravel\Facades
 */
class Ncentral extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ncentral';
    }
}
