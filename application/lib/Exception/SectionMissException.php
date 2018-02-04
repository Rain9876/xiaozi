<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 23/01/2018
 * Time: 5:35 PM
 */

namespace app\lib\Exception;

class SectionMissException extends BaseException {

    public $code = 404;

    public $msg = "The section you request is not exist";

    public $errorCode = 30000;
}