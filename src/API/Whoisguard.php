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

namespace Plients\Namecheap\API;

use Plients\Http\HttpResponse;
use Plients\Namecheap\AbstractAPI;

class Whoisguard extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function changeEmailAddress(array $parameters): HttpResponse
    {
        return $this->get('whoisguard.changeEmailAddress', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function enable(array $parameters): HttpResponse
    {
        return $this->get('whoisguard.enable', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function disable(array $parameters): HttpResponse
    {
        return $this->get('whoisguard.disable', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function unallot(array $parameters): HttpResponse
    {
        return $this->get('whoisguard.unallot', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function discard(array $parameters): HttpResponse
    {
        return $this->get('whoisguard.discard', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function allot(array $parameters): HttpResponse
    {
        return $this->get('whoisguard.allot', $parameters);
    }
}
