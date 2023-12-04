<?php

namespace Tousanco\PhpZaya;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Tousanco\PhpZaya\Contracts\BaseEndpoint;

class Domain extends BaseEndpoint
{
    /**
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/domains?section=list#list
     */
    public function all($params = [], $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/domains", [
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
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/domains?section=create#create
     */
    public function create($params, $timeout = null)
    {
        try {
            $response = $this->client->post("$this->baseUrl/domains", [
                'form_params' => $params,
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
     * @param int $id
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/domains?section=show#show
     */
    public function details($id, $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/domains/$id", [
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
     * @param int $id
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/domains?section=update#update
     */
    public function update($id, $params = [], $timeout = null)
    {
        try {
            $response = $this->client->patch("$this->baseUrl/domains/$id", [
                'form_params' => $params,
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
     * @param int $id
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/domains?section=delete#delete
     */
    public function delete($id, $timeout = null)
    {
        try {
            $response = $this->client->delete("$this->baseUrl/domains/$id", [
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
