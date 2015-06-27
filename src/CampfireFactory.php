<?php

/*
 * This file is part of NotifyMe.
 *
 * (c) Alt Three LTD <support@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NotifyMeHQ\Campfire;

use GuzzleHttp\Client;
use NotifyMeHQ\Contracts\FactoryInterface;
use NotifyMeHQ\NotifyMe\Arr;

class CampfireFactory implements FactoryInterface
{
    /**
     * Create a new campfire gateway instance.
     *
     * @param string[] $config
     *
     * @return \NotifyMeHQ\Campfire\CampfireGateway
     */
    public function make(array $config)
    {
        Arr::requires($config, ['from', 'token']);

        $client = new Client();

        return new CampfireGateway($client, $config);
    }
}
