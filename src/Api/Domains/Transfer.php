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

class Transfer extends AbstractApi
{
    protected $namespace = 'namecheap.domains.transfer.';

    public function create($parameters)
    {
        return $this->get('create', $parameters);
    }

    public function getStatus($parameters)
    {
        return $this->get('getStatus', $parameters);
    }

    public function updateStatus($parameters)
    {
        return $this->get('updateStatus', $parameters);
    }

    public function getList($parameters)
    {
        return $this->get('getList', $parameters);
    }
}
