<?php

namespace M44rt3np44uw\IsSteamRIP\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: maartenpaauw
 * Date: 01-01-16
 * Time: 19:59
 */
class RIP extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'M44rt3np44uw\IsSteamRIP\IsSteamRIP';
    }
}