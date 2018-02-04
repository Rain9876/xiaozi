<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 03/02/2018
 * Time: 7:54 PM
 */

namespace app\api\model;

class Classroom extends BaseModel
{
    protected $table = 'classroom';
    protected $hidden =['update_time','delete_time','department_id'];


}