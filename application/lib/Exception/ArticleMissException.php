<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 21/01/2018
 * Time: 6:50 PM
 */

namespace app\lib\Exception;

class ArticleMissException extends BaseException
{
    public $code = 404;

    public $msg = "The article you request is not exist";

    public $errorCode = 70000;

}