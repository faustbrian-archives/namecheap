<?php

/*
 * This file is part of Namecheap PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Namecheap\Api\Domains;

use BrianFaust\Namecheap\AbstractApi;

class Dns extends AbstractApi
{
    protected $namespace = 'namecheap.domains.dns.';

    public function setDefault($parameters)
    {
        return $this->get('setDefault', $parameters);
    }

    public function setCustom($parameters)
    {
        return $this->get('setCustom', $parameters);
    }

    public function getList($parameters)
    {
        return $this->get('getList', $parameters);
    }

    public function getHosts($parameters)
    {
        return $this->get('getHosts', $parameters);
    }

    public function getEmailForwarding($parameters)
    {
        return $this->get('getEmailForwarding', $parameters);
    }

    public function setEmailForwarding($parameters)
    {
        return $this->get('setEmailForwarding', $parameters);
    }

    public function setHosts($parameters)
    {
        return $this->get('setHosts', $parameters);
    }
}
