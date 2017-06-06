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

class Ssl extends AbstractApi
{
    protected $namespace = 'namecheap.ssl.';

    public function activate($parameters)
    {
        return $this->get('activate', $parameters);
    }

    public function getInfo($parameters)
    {
        return $this->get('getInfo', $parameters);
    }

    public function parseCSR($parameters)
    {
        return $this->get('parseCSR', $parameters);
    }

    public function getApproverEmailList($parameters)
    {
        return $this->get('getApproverEmailList', $parameters);
    }

    public function getList($parameters)
    {
        return $this->get('getList', $parameters);
    }

    public function create($parameters)
    {
        return $this->get('create', $parameters);
    }

    public function renew($parameters)
    {
        return $this->get('renew', $parameters);
    }

    public function resendApproverEmail($parameters)
    {
        return $this->get('resendApproverEmail', $parameters);
    }

    public function resendFulfillmentEmail($parameters)
    {
        return $this->get('resendfulfillmentemail', $parameters);
    }

    public function reissue($parameters)
    {
        return $this->get('reissue', $parameters);
    }

    public function purchaseMoreSans($parameters)
    {
        return $this->get('purchasemoresans', $parameters);
    }

    public function revokeCertificate($parameters)
    {
        return $this->get('revokecertificate', $parameters);
    }
}
