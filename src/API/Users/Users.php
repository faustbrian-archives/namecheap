<?php

declare(strict_types=1);

/*
 * This file is part of Namecheap PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Namecheap\API\Users;

use Plients\Http\HttpResponse;
use Plients\Namecheap\AbstractAPI;

class Users extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getPricing(array $parameters): HttpResponse
    {
        return $this->get('users.getPricing', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getBalances(): HttpResponse
    {
        return $this->post('users.getBalances');
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function changePassword(array $parameters): HttpResponse
    {
        return $this->get('users.changePassword', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function update(array $parameters): HttpResponse
    {
        return $this->get('users.update', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function createAddFundsrequest(array $parameters): HttpResponse
    {
        return $this->get('users.createaddfundsrequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getAddFundsStatus(array $parameters): HttpResponse
    {
        return $this->get('users.getAddFundsStatus', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function login(array $parameters): HttpResponse
    {
        return $this->get('users.login', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function resetPassword(array $parameters): HttpResponse
    {
        return $this->get('users.resetPassword', $parameters);
    }
}
