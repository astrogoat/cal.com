<?php

namespace Astrogoat\Calcom;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Calcom\Calcom
 */
class CalcomFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'calcom';
    }
}
