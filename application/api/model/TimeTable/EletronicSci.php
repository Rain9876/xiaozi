<?php

namespace app\api\model\TimeTable;

use app\api\model\BaseModel;

class EletronicSci extends BaseModel
{
    protected $table = "eletronicSci";
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
