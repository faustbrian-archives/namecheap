<?php

/*
 * This file is part of Namecheap PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Namecheap;

use BrianFaust\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $apiUser;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $clientIp;

    /**
     * @var bool
     */
    private $sandbox;

    /**
     * Create a new client instance.
     *
     * @param string $apiUser
     * @param string $apiKey
     * @param string $userName
     * @param string $clientIp
     * @param bool   $sandbox
     */
    public function __construct(string $apiUser, string $apiKey, string $userName, string $clientIp, bool $sandbox = true)
    {
        $this->apiUser  = $apiUser;
        $this->apiKey   = $apiKey;
        $this->userName = $userName;
        $this->clientIp = $clientIp;
        $this->sandbox  = $sandbox;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \BrianFaust\Namecheap\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $url = $this->sandbox ? 'https://api.sandbox.namecheap.com/xml.response'
                              : 'https://api.namecheap.com/xml.response';

        $client = Http::withBaseUri("$url?ApiUser={$this->apiUser}&ApiKey={$this->apiKey}&UserName={$this->userName}&ClientIp={$this->clientIp}");

        $class = "BrianFaust\\Namecheap\\API\\{$name}";

        return new $class($client);
    }
}
