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
    public function total(int $linkId, array $params = []): array
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/total", [
                'form_params' => $params,
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
    public function clicks(int $linkId, array $params = []): array
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/clicks", [
                'form_params' => $params,
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
    public function referrers(int $linkId, array $params = []): array
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/referrers", [
                'form_params' => $params,
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
    public function countries(int $linkId, array $params = []): array
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/countries", [
                'form_params' => $params,
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
    public function languages(int $linkId, array $params = []): array
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/languages", [
                'form_params' => $params,
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
    public function browsers(int $linkId, array $params = []): array
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/browsers", [
                'form_params' => $params,
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
    public function devices(int $linkId, array $params = []): array
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/devices", [
                'form_params' => $params,
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
    public function operatingSystems(int $linkId, array $params = []): array
    {
        try {
            $response = $this->client->get("$this->baseUrl/stats/$linkId/operating-systems", [
                'form_params' => $params,
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