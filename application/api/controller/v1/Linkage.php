<?php

namespace app\api\controller\v1;

use think\Controller;
use app\api\model\Linkage as LinkageModel;
use app\lib\Exception\LinkageException;

class Linkage extends Controller
{
    public function getLinkages()
    {
        $result = LinkageModel::getLinkages();
        if (!$result) {
            throw new LinkageException();
        }
        return $result;
    }
}
