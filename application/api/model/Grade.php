<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 02/02/2018
 * Time: 2:22 PM
 */

namespace app\api\model;


class Grade extends BaseModel
{
    protected $hidden =['update_time','delete_time','faculty_id'];

    public function department(){
        return $this->hasMany('Department','grade_id','id');
    }
}