<?php

/*
 * This file is part of Namecheap PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Namecheap\Api;

use BrianFaust\Namecheap\AbstractApi;

class Whoisguard extends AbstractApi
{
    protected $namespace = 'namecheap.whoisguard.';

    public function changeEmailAddress($parameters)
    {
        return $this->get('changeEmailAddress', $parameters);
    }

    public function enable($parameters)
    {
        return $this->get('enable', $parameters);
    }

    public function disable($parameters)
    {
        return $this->get('disable', $parameters);
    }

    public function unallot($parameters)
    {
        return $this->get('unallot', $parameters);
    }

    public function discard($parameters)
    {
        return $this->get('discard', $parameters);
    }

    public function allot($parameters)
    {
        return $this->get('allot', $parameters);
    }
}
