<?php

namespace Cocur\Slugify\Bridge\ZF2;

use Cocur\Slugify\Slugify;
use Zend\ServiceManager\ServiceManager;

/**
 * Class SlugifyService
 * @package    cocur/slugify
 * @subpackage bridge
 * @license    https://www.finishizer.net/licenses/
 */
class SlugifyService
{
    /**
     * @param ServiceManager $sm
     *
     * @return Slugify
     */
    public function __invoke($sm)
    {
        $config = $sm->get('Config');

        $options  = isset($config[Module::CONFIG_KEY]['options']) ? $config[Module::CONFIG_KEY]['options'] : [];
        $provider = isset($config[Module::CONFIG_KEY]['provider']) ? $config[Module::CONFIG_KEY]['provider'] : null;

        return new Slugify($options, $provider);
    }
}
