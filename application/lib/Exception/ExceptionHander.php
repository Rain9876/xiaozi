<?php

use think\exception\Handle;
use think\Log;
use think\Request;

/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 17/9/28
 * Time: 下午11:16
 */

class ExceptionHander extends handle
{
    private $code;
    private $msg;
    private $errorCode;


    public function render(\Exception $e)
    {
        if($e instanceof BaseException){
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;

        }else{
            if(config('app_debug')){

                return parent::render($e);

            }else{

                $this->code = 500;
                $this->msg = '服务器内部问题';
                $this->errorCode = 999;
                $this->recordErrorLog($e);
            }

        }

        $request = Request::instance();
        $result = [
            'msg' => $this->msg,
            'errorCode' => $this->errorCode,
            'request' => $request->url()
        ];

        return \json($result,$this->code);
    }

    public function recordErrorLog(\Exception $e){
        log::init([
            'type'=>'File',
            'path'=>LOG_PATH,
            'level'=>['error']
        ]);
        Log::record($e->getMessage(),'error');
    }

}