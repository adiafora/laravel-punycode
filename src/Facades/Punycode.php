<?php

namespace Adiafora\Punycode\Facades;

use Illuminate\Support\Facades\Facade;

class Punycode extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'punycode';
    }
}
