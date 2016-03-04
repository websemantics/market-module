<?php namespace Websemantics\MarketModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class MarketModuleServiceProvider
 *
 *
 * @package   Websemantics\MarketModul
 */

class MarketModuleServiceProvider extends AddonServiceProvider
{
    protected $plugins = [];

    protected $routes = [];

    protected $bindings = [];

    protected $middleware = [];

    protected $listeners = [];

    protected $providers = [];

    protected $singletons = [];

    protected $overrides = [];

    protected $mobile = [];
    
    protected $commands = [];

    public function register()
    {
    }

    public function map()
    {
    }
}


