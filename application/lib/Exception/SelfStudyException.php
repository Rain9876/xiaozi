<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 28/01/2018
 * Time: 8:40 PM
 */

namespace app\lib\Exception;


class SelfStudyException extends BaseException
{
    public $code = 404;

    public $msg = "The timeTable you request is not exist";

    public $errorCode = 60000;
}