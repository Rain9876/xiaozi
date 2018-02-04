<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 17/9/28
 * Time: 下午11:16
 */

namespace app\lib\Exception;

use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;


    public function render(\Exception $e)
    {
        if($e instanceof BaseException){
            // if it is custom error
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;

        }else{
            if(config('app_debug')){

                return parent::render($e);

            }else{

                $this->code = 500;
                $this->msg = 'Internal Server Error';
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
        Log::init([
            'type'=>'File',
            'path'=>LOG_PATH,
            'level'=>['error']
        ]);
        Log::record($e->getMessage(),'error');
    }

}