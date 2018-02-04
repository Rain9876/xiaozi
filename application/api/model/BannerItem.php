<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 17/9/28
 * Time: 上午11:57
 */

namespace app\api\model;

class BannerItem extends BaseModel
{
    protected $table = "banner_item";
    protected $hidden =['id','img_id','banner_id','delete_time','update_time'];


    public function img(){
       return $this->belongsTo('Image','img_id','id');
    }
}