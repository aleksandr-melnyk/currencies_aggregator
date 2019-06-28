<?php


namespace app\models\api;

class PrivatBankApi extends BankApi
{
    const URI = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5';

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