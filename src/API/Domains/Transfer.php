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

namespace Plients\Namecheap\API\Domains;

use Plients\Http\HttpResponse;
use Plients\Namecheap\AbstractAPI;

class Transfer extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function create(array $parameters): HttpResponse
    {
        return $this->get('domains.transfer.create', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getStatus(array $parameters): HttpResponse
    {
        return $this->get('domains.transfer.getStatus', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function updateStatus(array $parameters): HttpResponse
    {
        return $this->get('domains.transfer.updateStatus', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getList(array $parameters): HttpResponse
    {
        return $this->get('domains.transfer.getList', $parameters);
    }
}
