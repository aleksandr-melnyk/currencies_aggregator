<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 19.03.2019
 * Time: 21:45
 */

namespace mvc;


class Registry
{
    use SingletoneTrait;

    protected static $properties = [];

    public function getProperty($name)
    {
        return self::$properties[$name];
    }

    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperties()
    {
        return self::$properties;
    }
}