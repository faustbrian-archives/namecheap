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

class Dns extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function setDefault(array $parameters): HttpResponse
    {
        return $this->get('domains.dns.setDefault', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function setCustom(array $parameters): HttpResponse
    {
        return $this->get('domains.dns.setCustom', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getList(array $parameters): HttpResponse
    {
        return $this->get('domains.dns.getList', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getHosts(array $parameters): HttpResponse
    {
        return $this->get('domains.dns.getHosts', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getEmailForwarding(array $parameters): HttpResponse
    {
        return $this->get('domains.dns.getEmailForwarding', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function setEmailForwarding(array $parameters): HttpResponse
    {
        return $this->get('domains.dns.setEmailForwarding', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function setHosts(array $parameters): HttpResponse
    {
        return $this->get('domains.dns.setHosts', $parameters);
    }
}
