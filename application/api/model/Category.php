<?php

namespace app\api\model;

class Category extends BaseModel
{
    protected $table = 'Category';
    protected $hidden = ['delete_time','update_time','section_id'];

}
