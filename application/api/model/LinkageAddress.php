<?php

namespace app\api\model;

class LinkageAddress extends BaseModel
{
    protected $table = 'Linkage_address';
    protected $hidden =['update_time','delete_time',"linkage_id"];
}
