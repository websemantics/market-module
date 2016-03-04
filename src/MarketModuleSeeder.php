<?php namespace Websemantics\MarketModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class MarketModuleSeeder
 *
 *
 * @package   Websemantics\MarketModul
 */

class MarketModuleSeeder extends Seeder
{
	protected $seeders = [];
    /**
     * Seed the localization module.
     */
    public function run()
    {   
    		foreach ($this->seeders as $seeder) {
        	    $this->call($seeder);
    		}             
    }
}