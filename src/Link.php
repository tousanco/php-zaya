<?php

namespace Tousanco\PhpZaya;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Tousanco\PhpZaya\Contracts\BaseEndpoint;

class Link extends BaseEndpoint
{
    /*
     * @sample $params = [
     *  'search'    => (string) searchKey.
     *  'by'        => (string) in:title,alias,url.
     *  'status'    => (int) in:0,1,2,3,4,5.
     *  'ids'       => (string) ids comma separated.
     *  'space'     => (int) space id.
     *  'domain'    => (int) domain id.
     *  'favorites' => (int) in:0,1.
     *  'sort'      => (string) in:desc,asc,max,min.
     * ]
     */
    /**
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/links?section=list
     */
    public function all($params = [], $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/links", [
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
     * @param string $url
     * @param array $params
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/links?section=create#create
     */
    public function create($url, $params = [], $timeout = null)
    {
        try {
            $response = $this->client->post("$this->baseUrl/links", [
                'form_params' => array_merge($params, ['url' => $url]),
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
     * @see https://zaya.io/developers/links?section=show#show
     */
    public function details($id, $timeout = null)
    {
        try {
            $response = $this->client->get("$this->baseUrl/links/$id", [
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
     * @see https://zaya.io/developers/links?section=update#update
     */
    public function update($id, $params = [], $timeout = null)
    {
        try {
            $response = $this->client->patch("$this->baseUrl/links/$id", [
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
     * @param $id
     * @param int $timeout
     * @return array
     *
     * @see https://zaya.io/developers/links?section=delete#delete
     */
    public function delete($id, $timeout = null)
    {
        try {
            $response = $this->client->delete("$this->baseUrl/links/$id", [
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
