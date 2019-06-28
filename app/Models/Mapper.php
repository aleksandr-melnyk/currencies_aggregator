<?php


namespace app\models;


abstract class Mapper
{
    protected $titleMap = [];

    /**
     * @return array
     */
    public function getTitleList(): array
    {
        return $this->titleMap;
    }

    /**
     * @param int $type
     * @return string
     */
    public function getTitleByType(int $type): string
    {
        return $this->titleMap[$type];
    }
}