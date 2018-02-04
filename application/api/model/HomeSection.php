<?php

namespace app\api\model;

class HomeSection extends BaseModel
{
    protected $table = 'Home_section';
    protected $hidden = ['delete_time','update_time'];

    public function category(){
        return $this->hasMany('Category','section_id','id');
    }
}
