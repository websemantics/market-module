<?php namespace Websemantics\MarketModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class MarketModule
 *
 *
 * @package   Websemantics\MarketModul
 */

class MarketModule extends Module
{
    /**
     * The navigation icon.
     *
     * @var string
     */
    protected $icon = 'addon';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'example'
    ];
}