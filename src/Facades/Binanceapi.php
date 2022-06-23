<?php

namespace Ejaznoob\Binanceapi\Facades;

use Illuminate\Support\Facades\Facade;

class Binanceapi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'binanceapi';
    }
}
