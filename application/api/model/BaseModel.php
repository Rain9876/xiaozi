<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 17/9/28
 * Time: 上午11:57
 */

namespace app\api\model;

use think\Model;

class BaseModel extends Model
{

    protected function prefixImgUrl($value, $data)
    {
        $finalUrl = $value;
        if ($data['come_from'] == 1) {
            $finalUrl = config('setting.img_prefix') . $value;
        }
        return $finalUrl;

    }

    protected function classTimeTable($grade, $department, $class)
    {
        $result = $this->where('grade', '=', $grade)
            ->where('department', '=', $department)
            ->where('class', '=', $class)
            ->select();
        $result->hidden(['faculty', 'grade', 'department', 'class'])->toArray();

        return $result;
    }

    protected function departmentTimeTable($grade, $department)
    {
        $result = $this->field('faculty,grade,department,class')
            ->where('grade', '=', $grade)
            ->where('department', '=', $department)
            ->group('class')->select();

        $result->toArray();

        foreach ($result as $item) {
            $timeTable = $this->ClassTimeTable($grade, $department, $item['class']);
            $item['timetable'] = $timeTable;
        }
        return $result;
    }

//    protected function getTimeTableList(){
//        $result = $this->field('department')
//            ->group('department')->select();
//        return $result;
//    }

//,grade,department,class
}