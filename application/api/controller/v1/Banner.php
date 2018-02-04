<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 17/9/25
 * Time: 下午5:04
 */

namespace app\api\controller\v1;

use app\lib\Exception\BannerMissException;
use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;

class Banner
{
    /**
     * @url api/v1/banner/:id
     * @http GET
     * @param $id : the id of banner
     */
    public function getBanner($id)
    {

        (new IDMustBePositiveInt())->gocheck();

        $banner = BannerModel::getBannerID($id);

        if (!$banner) {
            throw new BannerMissException();
        }

        return $banner;
    }
}