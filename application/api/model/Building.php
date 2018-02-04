<?php

namespace app\api\model;


class Building extends BaseModel
{
    protected $table = 'Building';
    protected $hidden = ["delete_time","update_time"];
}
