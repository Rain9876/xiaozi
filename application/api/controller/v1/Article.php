<?php

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\lib\Exception\ArticleMissException;
use think\Controller;
use app\api\model\Article as ArticleModel;

class Article extends Controller
{

    public function getArticle($id)
    {
        (new IDMustBePositiveInt())->goCheck();

        $result = ArticleModel::getArticleById($id);

        if (!$result) {
            throw new ArticleMissException();
        }

        return $result;
    }


}
