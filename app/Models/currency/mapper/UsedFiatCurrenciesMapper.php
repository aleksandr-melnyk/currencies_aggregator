<?php


namespace app\models\currency\mapper;


use app\models\currency\enum\UsedFiatCurrenciesEnum;
use app\models\Mapper;

class UsedFiatCurrenciesMapper extends Mapper
{
    protected $titleMap = [
        UsedFiatCurrenciesEnum::UAH => 'Гривна',
        UsedFiatCurrenciesEnum::USD => 'Доллар США',
        UsedFiatCurrenciesEnum::EUR => 'Евро',
//        UsedFiatCurrenciesEnum::GBP => 'Британский фунт',
        UsedFiatCurrenciesEnum::RUB => 'Российский рубль',
//        UsedFiatCurrenciesEnum::PLN => 'Польский злотый',
    ];

    private $userCurrencies = [
        UsedFiatCurrenciesEnum::USD => 'Доллар США',
        UsedFiatCurrenciesEnum::EUR => 'Евро',
//        UsedFiatCurrenciesEnum::GBP => 'Британский фунт',
        UsedFiatCurrenciesEnum::RUB => 'Российский рубль',
//        UsedFiatCurrenciesEnum::PLN => 'Польский злотый',
    ];

    private $currenciesAliases = [
        UsedFiatCurrenciesEnum::UAH => 'UAH',
        UsedFiatCurrenciesEnum::USD => 'USD',
        UsedFiatCurrenciesEnum::EUR => 'EUR',
        UsedFiatCurrenciesEnum::GBP => 'GBP',
        UsedFiatCurrenciesEnum::RUB => 'RUB',
        UsedFiatCurrenciesEnum::PLN => 'PLN',
    ];

    /**
     * @return array
     */
    public function getUserCurrencies(): array
    {
        return $this->userCurrencies;
    }

    /**
     * @param int $currency
     * @return string
     */
    public function getCurrencyAlias(int $currency): string
    {
        return $this->currenciesAliases[$currency];
    }
}