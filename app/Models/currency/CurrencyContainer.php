<?php


namespace app\models\currency;


class CurrencyContainer
{
    private $code;
    private $alias;
    private $title;
    private $dateTime;
    private $rateBuy;
    private $rateSell;
    private $baseCurrencyCode;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getBaseCurrencyCode()
    {
        return $this->baseCurrencyCode;
    }

    /**
     * @param mixed $baseCurrencyCode
     */
    public function setBaseCurrencyCode($baseCurrencyCode): void
    {
        $this->baseCurrencyCode = $baseCurrencyCode;
    }

    /**
     * @return mixed
     */
    public function getRateSell()
    {
        return $this->rateSell;
    }

    /**
     * @param mixed $rateSell
     */
    public function setRateSell($rateSell): void
    {
        $this->rateSell = $rateSell;
    }

    /**
     * @return mixed
     */
    public function getRateBuy()
    {
        return $this->rateBuy;
    }

    /**
     * @param mixed $rateBuy
     */
    public function setRateBuy($rateBuy): void
    {
        $this->rateBuy = $rateBuy;
    }

    /**
     * @return mixed
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param mixed $dateTime
     */
    public function setDateTime($dateTime): void
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param mixed $alias
     */
    public function setAlias($alias): void
    {
        $this->alias = $alias;
    }
}