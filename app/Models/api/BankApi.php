<?php


namespace app\models\api;


use GuzzleHttp\Client;

abstract class BankApi implements ApiInterface
{
    const URI = '';

    protected $statusCode;

    protected $responseData;

    public function makeRequest(string $uri, string $method = 'GET', array $params = [])
    {
        $client = new Client();
        $response = $client->request($method, $uri, $params);
        $this->statusCode = $response->getStatusCode();
        $this->responseData = $response->getBody()->getContents();
        return $response;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @return array
     */
    abstract public function getResponseData(): array;

    /**
     * @return array
     */
    abstract public function prepareDataForUser(): array;
}