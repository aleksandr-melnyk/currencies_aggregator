<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 21.04.2019
 * Time: 19:08
 */

namespace app\controllers;


use app\models\api\MonobankApi;
use app\models\api\NbuApi;


class DefaultController extends MainController
{
    public function indexAction()
    {
        $privatApi = new MonobankApi();
        $data = $privatApi->prepareDataForUser();
        dump($data);
    }

}