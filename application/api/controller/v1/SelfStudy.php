<?php

namespace app\api\controller\v1;

use app\api\validate\SelfStudyValidate;
use app\lib\Exception\SelfStudyException;
use think\Controller;
use think\Request;
use app\api\model\SelfStudy as SelfStudyModel;

class SelfStudy extends Controller
{
    /**
     * @return Request
     */
    public function getStudyRoom()
    {
        (new SelfStudyValidate())->goCheck();
        $params = Request::instance()->param();

        $result = SelfStudyModel::getRoom($params['building'], $params['week'], $params['day']);

        if (!$result) {
            throw new SelfStudyException();
        }

        return $result;
    }


    public function getSearchList(){
        $result = SelfStudyModel::getList();
        if(!$result){
            throw new SelfStudyException();
        }
        return $result;
    }
}
