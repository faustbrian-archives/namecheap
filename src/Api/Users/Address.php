<?php

/*
 * This file is part of Namecheap PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Namecheap\Api\Users;

use BrianFaust\Namecheap\AbstractApi;

class Address extends AbstractApi
{
    protected $namespace = 'namecheap.users.address.';

    public function create($parameters)
    {
        return $this->get('create', $parameters);
    }

    public function delete($parameters)
    {
        return $this->get('delete', $parameters);
    }

    public function getInfo($parameters)
    {
        return $this->get('getInfo', $parameters);
    }

    public function getList()
    {
        return $this->get('getList');
    }

    public function setDefault($parameters)
    {
        return $this->get('setDefault', $parameters);
    }

    public function update($parameters)
    {
        return $this->get('update', $parameters);
    }
}
