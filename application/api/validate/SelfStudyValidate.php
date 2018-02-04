<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 28/01/2018
 * Time: 8:12 PM
 */

namespace app\api\validate;


class SelfStudyValidate extends BaseValidate
{
    protected $rule = [
        'building' => 'require|IsBuilding',
        'week' => 'require|between:1,53',
        'day' =>'require|isNotEmpty'
    ];

    protected $message = [
        "building" => "请求教学楼不存在",
        "week" => "请求周次不存在",
        "day" => "请求天数不存在"
    ];

    protected function isBuilding($value){
        $building = ["教学楼A","教学楼B","教学楼C","实验楼A","实验楼B","实验楼C","实验楼D"];
        if (in_array($value,$building)){
            return true;
        }
        return false;
    }

}