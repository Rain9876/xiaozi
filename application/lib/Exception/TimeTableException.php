<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 28/01/2018
 * Time: 5:53 PM
 */

namespace app\lib\Exception;


class TimeTableException extends BaseException
{
    public $code = 404;

    public $msg = "The timetable you request is not exist";

    public $errorCode = 50000;
}