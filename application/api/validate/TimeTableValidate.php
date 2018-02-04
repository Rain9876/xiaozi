<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 27/01/2018
 * Time: 10:55 AM
 */
namespace app\api\validate;

class TimeTableValidate extends BaseValidate{
    protected $rule =[
        'faculty' => "require|isFaculty",
        'grade' => "require|isNotEmpty",
        'department'=> "require|isNotEmpty",
        'classroom' => "require|isNotEmpty"
    ];

    protected $message = [
        'faculty' => "faculty 参数错误",
        'grade' => "grade 参数缺失",
        'department'=> "department 参数缺失",
        'classroom' => "classroom 参数缺失"
    ];

    protected function isFaculty($value,$data = "", $rule = "",$field =""){
        $facultyArr = ["人文与社会科学学院","机械工程学院","电子科学与光电技术学院","经济管理学院","计算机学院"];
        if (in_array($value,$facultyArr)){
            return true;
        }
        return false;
    }

}