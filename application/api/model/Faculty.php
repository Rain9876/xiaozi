<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 02/02/2018
 * Time: 2:22 PM
 */

namespace app\api\model;


class Faculty extends BaseModel
{
    protected $table = 'faculty';
    protected $hidden =['update_time','delete_time'];

    public function grade(){
        return $this->hasMany('Grade','faculty_id','id');
    }

    public static function getList(){
        return (new self())->with(['grade','grade.department','grade.department.classroom'])->select();
    }
}