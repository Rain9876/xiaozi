<?php

namespace app\api\model;


class PostArticle extends BaseModel
{
    protected $table = "Post_article";

    protected $hidden =['delete_time','update_time','postImg_id','headImg_id','avatarImg_id','create_time'];

    public function article(){
        return $this->belongsTo("Article","article_id","id");
    }

    public function detail(){
        return $this->hasMany('ArticleDetail','article_id','article_id');
    }

    public function postImg(){
        return $this->belongsTo('image','postImg_id',"id");
    }

    public function headImg(){
        return $this->belongsTo('image','headImg_id',"id");
    }

    public function avatarImg(){
        return $this->belongsTo('image','avatarImg_id',"id");
    }

    public static function getPostArticleById($id){
        return (new self())->with([
            'detail' => function ($query)
            {
                $query->with(['img'])->order('position asc');
            }])
            ->with(['postImg','headImg','avatarImg'])
            ->find($id);
    }

    public static function getAllPostArticle($page=1,$size=5){
        return (new self)->with(['postImg','headImg','avatarImg'])
            ->order(['create_time'=>'desc','id'=>'desc'])
            ->paginate($size, true, ['page' => $page]);
    }

}
