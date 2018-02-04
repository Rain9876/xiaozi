<?php

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\validate\PagingParameter;
use app\lib\Exception\ArticleMissException;
use think\Controller;
use think\Request;
use app\api\model\PostArticle as PostArticleModel;

class PostArticle extends Controller
{
    /**
     * @url api/v1/postArticle/getArticleDetail/:id
     * @http GET
     * @param $id : the id of banner
     */
    public function getPostArticleDetail($id)
    {

        (new IDMustBePositiveInt())->gocheck();

        $postArticle = PostArticleModel::getPostArticleById($id);

        if (!$postArticle) {
            throw new ArticleMissException();
        }

        return $postArticle;
    }

    public function getAllPostArticle($page = 1, $count = 5)
    {

        (new PagingParameter())->goCheck();

        $postArticles = PostArticleModel::getAllPostArticle($page, $count);

        if (!$postArticles) {
            throw new ArticleMissException();
        }

        return $postArticles;
    }

}
