<?php

namespace Spinen\SolarWindsMsp\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class SolarWindsMspFacade
 *
 * @package Spinen\SolarWindsMsp\Laravel\Facades
 */
class SolarWindsMsp extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'solarwindsmsp';
    }
}
