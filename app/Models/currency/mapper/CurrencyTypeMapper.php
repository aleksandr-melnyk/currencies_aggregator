<?php


namespace app\models\currency\mapper;


use app\models\currency\enum\CurrencyTypeEnum;
use app\models\Mapper;

class CurrencyTypeMapper extends Mapper
{
    protected $titleMap = [
        CurrencyTypeEnum::FIAT => 'Фиатная валюта',
        CurrencyTypeEnum::CRYPTO => 'Криптовалюта',
    ];
}