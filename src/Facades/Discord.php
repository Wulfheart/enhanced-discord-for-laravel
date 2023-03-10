<?php

namespace Wulfheart\Discord\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wulfheart\Discord\Discord
 */
class Discord extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Wulfheart\Discord\Discord::class;
    }
}
