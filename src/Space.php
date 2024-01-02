<?php

namespace Tousanco\PhpZaya;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Tousanco\PhpZaya\Contracts\BaseEndpoint;

class Space extends BaseEndpoint
{
    /**
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/spaces?section=list#list
     */
    public function all($params = [], $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/spaces", [
                'query' => $params,
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

    /**
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/spaces?section=create#create
     */
    public function create($params, $timeout = null)
    {
        try {
            $response = $this->client->post("$this->baseUrl/spaces", [
                'form_params' => $params,
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

    /**
     * @param int $id
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/spaces?section=show#show
     */
    public function details($id, $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/spaces/$id", [
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

    /**
     * @param int $id
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/spaces?section=update#update
     */
    public function update($id, $params = [], $timeout = null)
    {
        try {
            $response = $this->client->patch("$this->baseUrl/spaces/$id", [
                'form_params' => $params,
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

    /**
     * @param int $id
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/spaces?section=delete#delete
     */
    public function delete($id, $timeout = null)
    {
        try {
            $response = $this->client->delete("$this->baseUrl/spaces/$id", [
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
