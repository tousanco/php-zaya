<?php

namespace Tousanco\PhpZaya;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Tousanco\PhpZaya\Contracts\BaseEndpoint;

class Domain extends BaseEndpoint
{
    /**
     * @param array $params
     * @return array
     *
     * @see https://zaya.io/developers/domains?section=list#list
     */
    public function list(array $params = []): array
    {
        try {
            $response = $this->client->get("$this->baseUrl/domains", [
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
     * @param array $params
     * @return array
     *
     * @see https://zaya.io/developers/domains?section=create#create
     */
    public function create(array $params = []): array
    {
        try {
            $response = $this->client->post("$this->baseUrl/domains", [
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
     * @param int $id
     * @return array
     *
     * @see https://zaya.io/developers/domains?section=show#show
     */
    public function details(int $id): array
    {
        try {
            $response = $this->client->get("$this->baseUrl/domains/$id", [
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
     * @see https://zaya.io/developers/domains?section=update#update
     */
    public function update(int $id, array $params = []): array
    {
        try {
            $response = $this->client->patch("$this->baseUrl/domains/$id", [
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
     * @param int $id
     * @return array
     *
     * @see https://zaya.io/developers/domains?section=delete#delete
     */
    public function delete(int $id): array
    {
        try {
            $response = $this->client->delete("$this->baseUrl/domains/$id", [
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
