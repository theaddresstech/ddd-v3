<?php

namespace Bigtechlab\Ddd\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bigtechlab\Ddd\Ddd
 */
class Ddd extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Bigtechlab\Ddd\Ddd::class;
    }
}
