<?php

namespace app\api\controller\v1;

use think\Controller;
use app\api\model\HomeSection as HomeSectionModel;
use app\lib\Exception\SectionMissException;

class HomeSection extends Controller
{

    public function getSection()
    {
        $result = HomeSectionModel::all([], 'category');

        if (!$result) {
            throw new SectionMissException();
        }

        return $result;
    }
}
