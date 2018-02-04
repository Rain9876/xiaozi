<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 19/01/2018
 * Time: 6:01 PM
 */

namespace app\lib\Exception;

class ParameterException extends BaseException
{
    //URL error code
    public $code = 400;

    //error message
    public $msg = "URL parameter error";

    //custom error code
    public $errorCode = 10000;
}