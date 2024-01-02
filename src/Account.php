<?php

namespace Tousanco\PhpZaya;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Tousanco\PhpZaya\Contracts\BaseEndpoint;

class Account extends BaseEndpoint
{
    /**
     * @param int $timeout
     * @return array
     */
    public function details($timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/account", [
                'headers' => $this->headers,
                'timeout' => !is_null($timeout) ? $timeout : $this->timeout,
            ]);
        } catch (RequestException $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } catch (GuzzleException $e) {
            return [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}