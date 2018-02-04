<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 02/02/2018
 * Time: 2:23 PM
 */

namespace app\api\model;


class Department extends BaseModel
{
    protected $hidden =['update_time','delete_time','grade_id'];

    public function classroom(){
        return $this->hasMany("Classroom","department_id","id");
    }
}