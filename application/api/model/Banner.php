<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 17/9/28
 * Time: 上午11:56
 */

class Banner extends BaseModel
{

    public function items(){
        return $this->hasMany('Banner_item','id','banner_id');
    }


    public static function getBannerID($id){
        $result = self::with(['items','items.img'])->find($id);
    }
}