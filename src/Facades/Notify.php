<?php

namespace Idemonbd\Notify\Facades;

use Illuminate\Support\Facades\Facade;

class Notify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'notify';
    }
}