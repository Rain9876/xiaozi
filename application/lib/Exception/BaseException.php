<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 17/9/28
 * Time: 下午11:27
 */

namespace app\lib\Exception;

use think\Exception;

class BaseException extends Exception
{

    //状态码
    public $code = 400;

    //错误具体信息
    public $msg = "parameter error";

    //自定义错误码
    public $errorCode = 10000;

    public function __construct($params =[])
    {
        if(!is_array($params)){
            return null;
        }

        if(array_key_exists('code',$params)){
            $this->code = $params['code'];
        }

        if(array_key_exists('msg',$params)){
            $this->msg = $params['msg'];
        }

        if(array_key_exists('errorCode',$params)){
            $this->errorCode = $params['errorCode'];
        }
    }
}