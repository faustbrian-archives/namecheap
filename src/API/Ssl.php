<?php

/*
 * This file is part of Namecheap PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Namecheap\API;

use BrianFaust\Http\HttpResponse;
use BrianFaust\Namecheap\AbstractAPI;

class Ssl extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function activate(array $parameters): HttpResponse
    {
        return $this->get('ssl.activate', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getInfo(array $parameters): HttpResponse
    {
        return $this->get('ssl.getInfo', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function parseCSR(array $parameters): HttpResponse
    {
        return $this->get('ssl.parseCSR', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getApproverEmailList(array $parameters): HttpResponse
    {
        return $this->get('ssl.getApproverEmailList', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getList(array $parameters): HttpResponse
    {
        return $this->get('ssl.getList', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(array $parameters): HttpResponse
    {
        return $this->get('ssl.create', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function renew(array $parameters): HttpResponse
    {
        return $this->get('ssl.renew', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function resendApproverEmail(array $parameters): HttpResponse
    {
        return $this->get('ssl.resendApproverEmail', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function resendFulfillmentEmail(array $parameters): HttpResponse
    {
        return $this->get('ssl.resendfulfillmentemail', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function reissue(array $parameters): HttpResponse
    {
        return $this->get('ssl.reissue', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function purchaseMoreSans(array $parameters): HttpResponse
    {
        return $this->get('ssl.purchasemoresans', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function revokeCertificate(array $parameters): HttpResponse
    {
        return $this->get('ssl.revokecertificate', $parameters);
    }
}
