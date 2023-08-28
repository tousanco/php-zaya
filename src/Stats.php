<?php

namespace Tousanco\PhpZaya;

use GuzzleHttp\Exception\GuzzleException;
use Tousanco\PhpZaya\Contracts\BaseEndpoint;

class Stats extends BaseEndpoint
{
    /**
     * @param int $linkId
     * @param array $params
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function total($linkId, $params = [])
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/total", [
                'query' => $params,
                'headers' => $this->headers
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
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function clicks($linkId, $params = [])
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/clicks", [
                'query' => $params,
                'headers' => $this->headers
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
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function referrers($linkId, $params = [])
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/referrers", [
                'query' => $params,
                'headers' => $this->headers
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
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function countries($linkId, $params = [])
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/countries", [
                'query' => $params,
                'headers' => $this->headers
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
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function languages($linkId, $params = [])
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/languages", [
                'query' => $params,
                'headers' => $this->headers
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
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function browsers($linkId, $params = [])
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/browsers", [
                'query' => $params,
                'headers' => $this->headers
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
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function devices($linkId, $params = [])
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/devices", [
                'query' => $params,
                'headers' => $this->headers
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
     * @return array
     *
     * $params = [
     *  'from'    => AD date
     *  'to'      => AD date
     * ]
     */
    public function operatingSystems($linkId, $params = [])
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/operating-systems", [
                'query' => $params,
                'headers' => $this->headers
            ]);
        } catch (GuzzleException $e) {
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        } catch (Exception $e) {
            return [];
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}