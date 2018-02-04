<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 23/01/2018
 * Time: 11:29 PM
 */


namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\validate\PagingParameter;
use app\lib\Exception\ArticleMissException;
use think\Controller;
use app\api\model\Society as SocietyModel;
use app\api\model\Organization as OrganizationModel;
use app\api\model\Activity as ActivityModel;

class Event extends Controller
{
    public function getAllSocieties($page = 1, $count = 5)
    {
        (new PagingParameter())->goCheck();

        $societies = SocietyModel::getAllSocieties($page, $count);

        if ($societies->isEmpty()) {
            return [
                "total" => null,
                "per_page" => $count,
                "current_page" => $societies->getcurrentPage(),
                "data" => []
            ];
        }

        return $societies->toArray();


    }

    public function getSociety($id)
    {

        (new IDMustBePositiveInt())->goCheck();

        $society = SocietyModel::getSocietyById($id);

        if (!$society) {
            throw new ArticleMissException();
        }

        return $society;
    }

    public function getAllOrganizations($page = 1, $count = 5)
    {
        (new PagingParameter())->goCheck();

        $organizations = OrganizationModel::getAllOrganizations($page, $count);

        if ($organizations->isEmpty()) {
            return [
                "total" => null,
                "per_page" => $count,
                "current_page" => $organizations->getcurrentPage(),
                "data" => []
            ];
        }

        return $organizations->toArray();

    }

    public function getOrganization($id)
    {

        (new IDMustBePositiveInt())->goCheck();

        $organization = OrganizationModel::getOrganizationById($id);

        if (!$organization) {
            throw new ArticleMissException();
        }

        return $organization;
    }

    public function getAllActivities($page = 1, $count = 5)
    {
        (new PagingParameter())->goCheck();

        $activities = ActivityModel::getAllActivities($page, $count);

        if ($activities->isEmpty()) {
            return [
                "total" => null,
                "per_page" => $count,
                "current_page" => $activities->getcurrentPage(),
                "data" => []
            ];
        }

        return $activities->toArray();

    }

    public function getActivity($id)
    {

        (new IDMustBePositiveInt())->goCheck();

        $activity = ActivityModel::getActivityById($id);

        if (!$activity) {
            throw new ArticleMissException();
        }

        return $activity;
    }


}