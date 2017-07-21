<?php

/*
 * This file is part of Namecheap PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Namecheap\API\Users;

use BrianFaust\Http\HttpResponse;
use BrianFaust\Namecheap\AbstractAPI;

class Users extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getPricing(array $parameters): HttpResponse
    {
        return $this->get('users.getPricing', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getBalances(): HttpResponse
    {
        return $this->post('users.getBalances');
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function changePassword(array $parameters): HttpResponse
    {
        return $this->get('users.changePassword', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update(array $parameters): HttpResponse
    {
        return $this->get('users.update', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function createAddFundsrequest(array $parameters): HttpResponse
    {
        return $this->get('users.createaddfundsrequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getAddFundsStatus(array $parameters): HttpResponse
    {
        return $this->get('users.getAddFundsStatus', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function login(array $parameters): HttpResponse
    {
        return $this->get('users.login', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function resetPassword(array $parameters): HttpResponse
    {
        return $this->get('users.resetPassword', $parameters);
    }
}
