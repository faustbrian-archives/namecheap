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

class Nameserver extends AbstractApi
{
    protected $namespace = 'namecheap.domains.ns.';

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

    public function update($parameters)
    {
        return $this->get('update', $parameters);
    }
}
