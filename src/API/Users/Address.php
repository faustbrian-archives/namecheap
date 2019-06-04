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

class Address extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function create(array $parameters): HttpResponse
    {
        return $this->get('users.address.create', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function delete(array $parameters): HttpResponse
    {
        return $this->get('users.address.delete', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getInfo(array $parameters): HttpResponse
    {
        return $this->get('users.address.getInfo', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getList(): HttpResponse
    {
        return $this->get('users.address.getList');
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function setDefault(array $parameters): HttpResponse
    {
        return $this->get('users.address.setDefault', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function update(array $parameters): HttpResponse
    {
        return $this->get('users.address.update', $parameters);
    }
}
