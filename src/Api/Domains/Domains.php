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

class Domains extends AbstractApi
{
    protected $namespace = 'namecheap.domains.';

    public function getList($parameters)
    {
        return $this->get('getList', $parameters);
    }

    public function getContacts($parameters)
    {
        return $this->get('getContacts', $parameters);
    }

    public function create($parameters)
    {
        return $this->get('create', $parameters);
    }

    public function getTldList()
    {
        return $this->get('getTldList');
    }

    public function setContacts()
    {
        return $this->get('setContacts', $parameters);
    }

    public function check($parameters)
    {
        return $this->get('check', $parameters);
    }

    public function reactivate($parameters)
    {
        return $this->get('reactivate', $parameters);
    }

    public function renew($parameters)
    {
        return $this->get('renew', $parameters);
    }

    public function getRegistrarLock($parameters)
    {
        return $this->get('getRegistrarLock', $parameters);
    }

    public function setRegistrarLock($parameters)
    {
        return $this->get('setRegistrarLock', $parameters);
    }

    public function getInfo($parameters)
    {
        return $this->get('getInfo', $parameters);
    }
}
