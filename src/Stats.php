<?php

namespace Tousanco\PhpZaya;

use GuzzleHttp\Exception\GuzzleException;
use Tousanco\PhpZaya\Contracts\BaseEndpoint;

class Stats extends BaseEndpoint
{
    /**
     * @param int $linkId
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function total($linkId, $params = [], $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/total", [
                'query' => $params,
                'headers' => $this->headers,
                'timeout' => !is_null($timeout) ? $timeout : $this->timeout,
            ]);
        } catch (GuzzleException $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } catch (Exception $e) {
            return [];
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param int $linkId
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function clicks($linkId, $params = [], $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/clicks", [
                'query' => $params,
                'headers' => $this->headers,
                'timeout' => !is_null($timeout) ? $timeout : $this->timeout,
            ]);
        } catch (GuzzleException $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } catch (Exception $e) {
            return [];
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param int $linkId
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function referrers($linkId, $params = [], $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/referrers", [
                'query' => $params,
                'headers' => $this->headers,
                'timeout' => !is_null($timeout) ? $timeout : $this->timeout,
            ]);
        } catch (GuzzleException $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } catch (Exception $e) {
            return [];
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param int $linkId
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function countries($linkId, $params = [], $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/countries", [
                'query' => $params,
                'headers' => $this->headers,
                'timeout' => !is_null($timeout) ? $timeout : $this->timeout,
            ]);
        } catch (GuzzleException $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } catch (Exception $e) {
            return [];
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param int $linkId
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function languages($linkId, $params = [], $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/languages", [
                'query' => $params,
                'headers' => $this->headers,
                'timeout' => !is_null($timeout) ? $timeout : $this->timeout,
            ]);
        } catch (GuzzleException $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } catch (Exception $e) {
            return [];
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param int $linkId
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function browsers($linkId, $params = [], $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/browsers", [
                'query' => $params,
                'headers' => $this->headers,
                'timeout' => !is_null($timeout) ? $timeout : $this->timeout,
            ]);
        } catch (GuzzleException $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } catch (Exception $e) {
            return [];
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param int $linkId
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function devices($linkId, $params = [], $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/devices", [
                'query' => $params,
                'headers' => $this->headers,
                'timeout' => !is_null($timeout) ? $timeout : $this->timeout,
            ]);
        } catch (GuzzleException $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } catch (Exception $e) {
            return [];
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param int $linkId
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function operatingSystems($linkId, $params = [], $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/operating-systems", [
                'query' => $params,
                'headers' => $this->headers,
                'timeout' => !is_null($timeout) ? $timeout : $this->timeout,
            ]);
        } catch (GuzzleException $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } catch (Exception $e) {
            return [];
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}