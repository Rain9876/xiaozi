<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 21/01/2018
 * Time: 6:29 PM
 */
namespace app\api\model;

use think\Db;
use think\db\Query;

class Article extends BaseModel
{
    protected $table = 'Article';
    protected $hidden =['id','delete_time','update_time','create_time'];

    public function detail(){
        return $this->hasMany('ArticleDetail','article_id','id');
    }

    public static function getArticleById($id){
        return (new self())->with(
            [
                'detail' => function ($query)
                {
                    $query->with(['img'])
                        ->order('position', 'asc');
                }])->find($id);
    }

}