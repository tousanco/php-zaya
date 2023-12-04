<?php

namespace Tousanco\PhpZaya;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Tousanco\PhpZaya\Contracts\BaseEndpoint;

class Link extends BaseEndpoint
{
    /**
     * @param array $params
     * @return array
     *
     * @see https://zaya.io/developers/links?section=list
     * $params = [
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
    public function all($params = [])
    {
        try {
            $response = $this->client->get("$this->baseUrl/links", [
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
     * @param string $url
     * @param array $params
     * @return array
     *
     * @see https://zaya.io/developers/links?section=create#create
     */
    public function create($url, $params = [])
    {
        try {
            $response = $this->client->post("$this->baseUrl/links", [
                'form_params' => array_merge($params, ['url' => $url]),
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
     * @param int $id
     * @return array
     *
     * @see https://zaya.io/developers/links?section=show#show
     */
    public function details($id)
    {
        try {
            $response = $this->client->get("$this->baseUrl/links/$id", [
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
     * @param int $id
     * @param array $params
     * @return array
     *
     * @see https://zaya.io/developers/links?section=update#update
     */
    public function update($id, $params = [])
    {
        try {
            $response = $this->client->patch("$this->baseUrl/links/$id", [
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
     * @param $id
     * @return array
     *
     * @see https://zaya.io/developers/links?section=delete#delete
     */
    public function delete($id)
    {
        try {
            $response = $this->client->delete("$this->baseUrl/links/$id", [
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
