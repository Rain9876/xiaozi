<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 17/9/28
 * Time: 下午12:06
 */

namespace app\api\model;

class Image extends BaseModel
{
    protected $table = 'Image';
    protected $hidden = ['id', 'come_from', 'delete_time', 'update_time'];

    public function getUrlAttr($value,$data){
        return parent::prefixImgUrl($value,$data);
    }
}