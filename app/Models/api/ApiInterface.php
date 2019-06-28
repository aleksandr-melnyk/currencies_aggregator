<?php


namespace app\models\api;


interface ApiInterface
{
    function makeRequest(string $uri, string $method = 'GET', array $params = []);

    function prepareDataForUser();
}