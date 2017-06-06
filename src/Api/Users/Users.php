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

class Users extends AbstractApi
{
    protected $namespace = 'namecheap.users.';

    public function getPricing($parameters)
    {
        return $this->get('getPricing', $parameters);
    }

    public function getBalances()
    {
        return $this->post('getBalances');
    }

    public function changePassword($parameters)
    {
        return $this->get('changePassword', $parameters);
    }

    public function update($parameters)
    {
        return $this->get('update', $parameters);
    }

    public function createAddFundsrequest($parameters)
    {
        return $this->get('createaddfundsrequest', $parameters);
    }

    public function getAddFundsStatus($parameters)
    {
        return $this->get('getAddFundsStatus', $parameters);
    }

    public function login($parameters)
    {
        return $this->get('login', $parameters);
    }

    public function resetPassword($parameters)
    {
        return $this->get('resetPassword', $parameters);
    }
}
