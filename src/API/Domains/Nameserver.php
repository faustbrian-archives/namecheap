<?php

/*
 * This file is part of Namecheap PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Namecheap\API\Domains;

use BrianFaust\Http\HttpResponse;
use BrianFaust\Namecheap\AbstractAPI;

class Nameserver extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(array $parameters): HttpResponse
    {
        return $this->get('domains.ns.create', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function delete(array $parameters): HttpResponse
    {
        return $this->get('domains.ns.delete', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getInfo(array $parameters): HttpResponse
    {
        return $this->get('domains.ns.getInfo', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update(array $parameters): HttpResponse
    {
        return $this->get('domains.ns.update', $parameters);
    }
}
