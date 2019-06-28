<?php


namespace app\models\api;


class NbuApi extends BankApi
{
    const URI = 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?jsons';

    public function __construct()
    {
        $this->makeRequest(self::URI);
    }

    /**
     * @return array
     */
    public function getResponseData(): array
    {
        return json_decode($this->responseData, true) ?? [];
    }

    public function prepareDataForUser(): array
    {

    }
}