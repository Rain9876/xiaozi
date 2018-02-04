<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 19/01/2018
 * Time: 5:36 PM
 */

namespace app\api\validate;

use think\Validate;
use think\Request;
use app\lib\Exception\ParameterException;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $requests = Request::instance();
        $params = $requests->param();

        $result = $this->batch()->check($params);

        if(!$result){
            $e = new ParameterException([
                'msg' =>  is_array($this->error) ? implode(
                    ';', $this->error) : $this->error,
            ]);
            throw $e;
        }else{
            return true;
        }
    }


    protected function isPositiveInteger($value,$data = "", $rule = "",$field ="")
    {
        if(is_numeric($value)&is_int($value+0)&($value+0)>0)
        {
            return true;
        }else{
            return false;
        }
    }

    protected function isNotEmpty($value,$data = "", $rule = "",$field ="")
    {
        if(empty($value)){
            return false;
        }else{
            return true;
        }
    }
}