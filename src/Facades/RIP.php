<?php namespace M44rt3np44uw\IsSteamRIP\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class RIP
 * @package M44rt3np44uw\IsSteamRIP\Facades
 */
class RIP extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'M44rt3np44uw\IsSteamRIP\IsSteamRIP';
    }
}