<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 28/01/2018
 * Time: 9:22 PM
 */

namespace app\lib\Exception;


class LinkageException extends BaseException
{
    public $code = 404;

    public $msg = "The linkage you request is not exist";

    public $errorCode = 80000;
}