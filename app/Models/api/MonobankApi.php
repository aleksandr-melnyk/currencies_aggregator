<?php


namespace app\models\api;


use app\models\currency\mapper\UsedFiatCurrenciesMapper;

class MonobankApi extends BankApi
{
    const URI = 'https://api.monobank.ua/bank/currency';

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
        $data = [];
        $usedCurrenciesMapper = new UsedFiatCurrenciesMapper();
        foreach ($this->getResponseData() as $value) {
            $currencies = $usedCurrenciesMapper->getTitleList();
            if (isset($currencies[$value['currencyCodeA']])){
                $data[$value['currencyCodeA']]['title'] = $currencies[$value['currencyCodeA']];
                $data[$value['currencyCodeA']]['base_title'] = $currencies[$value['currencyCodeB']];
                $data[$value['currencyCodeA']]['rate_sell'] = $value['rateSell'];
                $data[$value['currencyCodeA']]['rate_buy'] = $value['rateBuy'];
                $data[$value['currencyCodeA']]['datetime'] = date('Y-F-d H:i:s', $value['date']);
                $data[$value['currencyCodeA']]['alias'] = $usedCurrenciesMapper->getCurrencyAlias($value['currencyCodeA']);
            }
        }
        return $data;
    }
}