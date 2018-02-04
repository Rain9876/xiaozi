<?php

namespace app\api\model;
use think\Db;
class Society extends BaseModel
{
    protected $table = 'Society';
    protected $hidden = ['delete_time','update_time','img_id'];

    public function article(){
        return $this->belongsTo('Article','article_id','id');
    }

    public function img(){
        return $this->belongsTo('image','img_id','id');
    }

    public static function getAllSocieties($page=1,$size=5){
        return (new self())->with('img')
            ->order('id','asc')
            ->paginate($size, true, ['page' => $page]);
    }

    public static function getSocietyById($id){
        $articleId =  Db::table('Society')->field('article_id')
            ->where('id','=',$id)
            ->find();

        return Article::getArticleById($articleId);
    }
}
