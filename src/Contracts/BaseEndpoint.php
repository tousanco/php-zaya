<?php

namespace Tousanco\PhpZaya\Contracts;

use GuzzleHttp\Client;

abstract class BaseEndpoint
{
    protected $client;
    protected $apiKey;
    protected $baseUrl;
    protected $headers;

    public function __construct(Client $client, $apiKey, $baseUrl = 'https://zaya.io/api/v1')
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->headers = [
            'Authorization' => "Bearer $this->apiKey",
        ];
    }

    public static function instance($apiKey, $baseUrl = 'https://zaya.io/api/v1')
    {
        return new static(
            new Client(), $apiKey, $baseUrl
        );
    }
}
