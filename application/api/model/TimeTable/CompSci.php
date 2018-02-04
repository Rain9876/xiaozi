<?php

namespace app\api\model\TimeTable;
use app\api\model\BaseModel;

class CompSci extends BaseModel
{
    protected $table = "compSci";
    protected $hidden =["delete_time","update_time"];

    public static function getClassTimeTable($grade,$department,$class){
        return (new self())->classTimeTable($grade,$department,$class);
    }

    public static function getDepartmentTimeTable($grade,$department){
        return (new self())->departmentTimeTable($grade,$department);
    }

//    public static function getSearchList(){
//        return (new self())->getTimeTableList();
//    }
}
