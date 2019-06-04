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

class Nameserver extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function create(array $parameters): HttpResponse
    {
        return $this->get('domains.ns.create', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function delete(array $parameters): HttpResponse
    {
        return $this->get('domains.ns.delete', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getInfo(array $parameters): HttpResponse
    {
        return $this->get('domains.ns.getInfo', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function update(array $parameters): HttpResponse
    {
        return $this->get('domains.ns.update', $parameters);
    }
}
