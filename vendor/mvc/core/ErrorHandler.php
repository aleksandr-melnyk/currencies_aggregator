<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 19.03.2019
 * Time: 22:14
 */

namespace mvc;


class ErrorHandler
{
    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        } else {
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler($e)
    {
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('exception', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    protected function logErrors($message = '', $file = '', $line = '')
    {
        error_log("[" . date('Y-m-d H:i:s') . "] 
        Error message: {$message} | File: {$file} | Line: {$line} 
        \n ==============================\n",
            3, ROOT . '/temp/errors.log');
    }

    protected function displayError($errNum, $errStr, $errFile, $errLine, $response = 404)
    {
        http_response_code($response);
        if ($response == 404 && !DEBUG) {
            require WWW . '/errors/404.php';
            die;
        }
        if (DEBUG) {
            require WWW . '/errors/dev.php';
        } else {
            require WWW . '/errors/prod.php';
        }
        die;
    }
}