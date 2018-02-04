<?php

namespace app\api\model;
use think\Db;
class Activity extends BaseModel
{
    protected $hidden = ['delete_time','update_time','img_id'];

    public function article(){
        return $this->belongsTo('Article','article_id','id');
    }

    public function img(){
        return $this->belongsTo('Image','img_id','id');
    }

    public static function getAllActivities($page=1,$size=5){
        return (new self())->with('img')
            ->order('id','desc')
            ->paginate($size, true, ['page' => $page]);
    }

    public static function getActivityById($id){
        $articleId =  Db::table('Activity')->field('article_id')
            ->where('id','=',$id)
            ->find();

        return Article::getArticleById($articleId);
    }
}
