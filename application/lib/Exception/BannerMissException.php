<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 20/01/2018
 * Time: 11:48 AM
 */

namespace app\lib\Exception;

class BannerMissException extends BaseException
{
    public $code = 404;

    public $msg = "The banner you request is not exist";

    public $errorCode = 40000;

}