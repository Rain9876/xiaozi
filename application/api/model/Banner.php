<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 17/9/28
 * Time: 上午11:56
 */

namespace app\api\model;

class Banner extends BaseModel
{
    protected $table = 'Banner';

    protected $hidden = ['delete_time','update_time'];

    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }


    public static function getBannerID($id){
        $result = (new self())->with(['items','items.img'])->find($id);
        return $result;
    }

}