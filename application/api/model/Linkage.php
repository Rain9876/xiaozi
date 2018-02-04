<?php

namespace app\api\model;

class Linkage extends BaseModel
{
    protected $hidden =['update_time','delete_time','quote'];

    public function address(){
        return $this->hasMany('LinkageAddress',"linkage_id","id");
    }

    public static function getLinkages(){
        $linkage = (new self())->with('address')->select();
        $linkage->toArray();

        $result = [
            'linkage' => $linkage,
            'quote' => $linkage[0]['quote']
        ];
        return $result;
    }
}
