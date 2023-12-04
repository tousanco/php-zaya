<?php

namespace Tousanco\PhpZaya\Contracts;

use GuzzleHttp\Client;

abstract class BaseEndpoint
{
    protected $client;
    protected $apiKey;
    protected $baseUrl;
    protected $headers;
    protected $timeout;

    public function __construct(
        Client $client,
        $apiKey,
        $baseUrl = 'https://zaya.io/api/v1',
        $timeout = 5
    )
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->headers = [
            'Authorization' => "Bearer $this->apiKey",
        ];
        $this->timeout = $timeout;
    }

    public static function instance(
        $apiKey,
        $baseUrl = 'https://zaya.io/api/v1',
        $timeout = 5
    )
    {
        return new static(
            new Client(),
            $apiKey,
            $baseUrl,
            $timeout
        );
    }
}
