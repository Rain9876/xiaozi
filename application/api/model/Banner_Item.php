<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 17/9/28
 * Time: 上午11:57
 */

class Banner_Item extends BaseModel
{
   public function img(){
       return $this->belongsTo('Image','img_id','id');
   }
}