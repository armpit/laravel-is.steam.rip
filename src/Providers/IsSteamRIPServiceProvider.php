<?php namespace M44rt3np44uw\IsSteamRIP\Providers;

use GuzzleHttp\Client;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use M44rt3np44uw\IsSteamRIP\IsSteamRIP;

/**
 * Class IsSteamRIPServiceProvider
 * @package M44rt3np44uw\IsSteamRIP\Providers
 */
class IsSteamRIPServiceProvider extends ServiceProvider
{
    /**
     * Defer
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register
     */
    public function register()
    {
        $this->registerBindings();
        $this->registerIsSteamRIP();
        $this->aliasIsSteamRIP();
    }

    /**
     * Register bindings.
     */
    private function registerBindings()
    {
        $this->app->singleton('GuzzleHttp\Guzzle', function()
        {
            return new Client();
        });
    }

    /**
     * Register IsSteamRIP
     */
    private function registerIsSteamRIP()
    {
        $this->app->bind('M44rt3np44uw\IsSteamRIP\IsSteamRIP', function()
        {
            return new IsSteamRIP($this->app['GuzzleHttp\Guzzle']);
        });
    }

    /**
     * Register alias
     */
    private function aliasIsSteamRIP()
    {
        if(!$this->aliasExists('RIP'))
        {
            AliasLoader::getInstance()->alias(
                'RIP',
                \M44rt3np44uw\IsSteamRIP\IsSteamRIP::class
            );
        }
    }

    /**
     * Check if an alias exists.
     *
     * @param $alias
     * @return bool
     */
    private function aliasExists($alias)
    {
        return array_key_exists($alias, AliasLoader::getInstance()->getAliases());
    }

    /**
     * Provides array.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'M44rt3np44uw\IsSteamRIP\IsSteamRIP',
            'GuzzleHttp\Client'
        ];
    }
}