<?php

/*
 * This file is part of Laravel Vimeo.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vinkla\Vimeo\Factories;

use Vimeo\Vimeo;

/**
 * The is the Vimeo factory class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class VimeoFactory
{
    /**
     * Make a new Vimeo client.
     *
     * @param array $config
     * @return Vimeo
     */
    public function make(array $config)
    {
        $config = $this->getConfig($config);

        return new Vimeo(
            $config['client_id'],
            $config['client_secret'],
            $config['access_token']
        );
    }

    /**
     * Get the configuration data.
     *
     * @param string[] $config
     *
     * @throws \InvalidArgumentException
     *
     * @return array
     */
    protected function getConfig(array $config)
    {
        $keys = ['client_id', 'client_secret'];

        foreach ($keys as $key) {
            if (!array_key_exists($key, $config)) {
                throw new \InvalidArgumentException('The Vimeo client requires configuration.');
            }
        }

        return array_only($config, ['client_id', 'client_secret', 'access_token']);
    }
}
