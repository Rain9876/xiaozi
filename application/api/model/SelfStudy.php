<?php

namespace app\api\model;

use think\Db;

class SelfStudy extends BaseModel
{
    protected $table = "Self_study";
    protected $hidden = ['delete_time', 'update_time', 'building_id'];


    public static function getRoom($building, $week, $day)
    {
        $result = (new self())->alias('a')
            ->field('a.id,Room,seat,weekday,name,num_week')
            ->join('Building b', 'a.building_id = b.id')
            ->where('b.name', '=', $building)
            ->where('num_week', '=', $week)
            ->where('weekday', '=', $day)
            ->select();

        return $result;
    }


    public static function getList()
    {
        $searchList = array();
        $searchList[0] = [
            'name' => "教学楼",
            'content' => ["教学楼A", "教学楼B", "教学楼C", "实验楼A", "实验楼B", "实验楼C", "实验楼D"],
            'id' => 0,
            'index' => -1
        ];
        $searchList[1] = [
            'name' => "周次",
            'content' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
            'id' => 1,
            'index' => -1,
        ];
        $searchList[2] = [
            'name' => "星期",
            'content' => ["一", "二", "三", "四", "五"],
            'id' => 2,
            'index' => -1
        ];

        $result = [
            'head_img' => "http://xiaozi.cn/image/util/xiaozi.png",
            'searchList'=>$searchList
        ];

        return $result;
    }
}
