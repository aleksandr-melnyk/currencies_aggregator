<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 21.04.2019
 * Time: 19:08
 */

namespace app\controllers;


class DefaultController extends MainController
{
    public function indexAction()
    {
        var_dump(123);
    }

    public function categoryAction()
    {
        var_dump(456);
    }
}