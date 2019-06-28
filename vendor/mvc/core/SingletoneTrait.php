<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 19.03.2019
 * Time: 21:47
 */

namespace mvc;


trait SingletoneTrait
{
    private static $instance;

    public static function instance()
    {
        if (self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }
}