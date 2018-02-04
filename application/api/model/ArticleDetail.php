<?php

namespace app\api\model;

class ArticleDetail extends BaseModel
{
    protected $table = 'Article_detail';

    protected $hidden =['id','delete_time','update_time','article_id',"img_id","hint"];

    public function img(){
        return $this->belongsTo('Image','img_id',"id");
    }

}
