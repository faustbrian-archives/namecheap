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

class Domains extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getList(array $parameters): HttpResponse
    {
        return $this->get('domains.getList', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getContacts(array $parameters): HttpResponse
    {
        return $this->get('domains.getContacts', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(array $parameters): HttpResponse
    {
        return $this->get('domains.create', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getTldList(): HttpResponse
    {
        return $this->get('domains.getTldList');
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function setContacts(): HttpResponse
    {
        return $this->get('domains.setContacts', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function check(array $parameters): HttpResponse
    {
        return $this->get('domains.check', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function reactivate(array $parameters): HttpResponse
    {
        return $this->get('domains.reactivate', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function renew(array $parameters): HttpResponse
    {
        return $this->get('domains.renew', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getRegistrarLock(array $parameters): HttpResponse
    {
        return $this->get('domains.getRegistrarLock', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function setRegistrarLock(array $parameters): HttpResponse
    {
        return $this->get('domains.setRegistrarLock', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getInfo(array $parameters): HttpResponse
    {
        return $this->get('domains.getInfo', $parameters);
    }
}
