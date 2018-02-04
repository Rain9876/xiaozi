<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 24/01/2018
 * Time: 7:37 PM
 */

namespace app\api\controller\v1;

use app\api\validate\DepartmentTimeTableValidate;
use app\api\validate\TimeTableValidate;
use think\Controller;
use think\Request;
use app\api\model\TimeTable\EconMangement as EconMangementModel;
use app\api\model\TimeTable\CompSci as CompSciModel;
use app\api\model\TimeTable\CulturalSociety as CulturalSocietyModel;
use app\api\model\TimeTable\EletronicSci as EletronicScitModel;
use app\api\model\TimeTable\MechEngineering as MechEngineeringModel;
use app\api\model\Faculty as FacultyModel;
use app\lib\Exception\TimeTableException;

class TimeTable extends Controller
{
    public function getTimeTable()
    {
        $params = Request::instance()->param();

        (new TimeTableValidate())->goCheck();

        $faculty = $params['faculty'];

        switch ($faculty) {
            case "人文与社会科学学院":
                $result = CulturalSocietyModel::getClassTimeTable($params['grade'], $params['department'], $params['classroom']);
                break;
            case "机械工程学院":
                $result = MechEngineeringModel::getClassTimeTable($params['grade'], $params['department'], $params['classroom']);
                break;
            case "电子科学与光电技术学院":
                $result = EletronicScitModel::getClassTimeTable($params['grade'], $params['department'], $params['classroom']);
                break;
            case "经济管理学院":
                $result = EconMangementModel::getClassTimeTable($params['grade'], $params['department'], $params['classroom']);
                break;
            case "计算机学院":
                $result = CompSciModel::getClassTimeTable($params['grade'], $params['department'], $params['classroom']);
                break;
            default:
                $result = null;
        }

        if ($result->isEmpty()) {
            throw new TimeTableException();
        }

        return $result;

    }

    public function getDepartmentTimeTable()
    {
        $params = Request::instance()->param();

        (new DepartmentTimeTableValidate())->goCheck();

        $faculty = $params['faculty'];

        switch ($faculty) {
            case "人文与社会科学学院":
                $result = CulturalSocietyModel::getDepartmentTimeTable($params['grade'], $params['department']);
                break;
            case "机械工程学院":
                $result = MechEngineeringModel::getDepartmentTimeTable($params['grade'], $params['department']);
                break;
            case "电子科学与光电技术学院":
                $result = EletronicScitModel::getDepartmentTimeTable($params['grade'], $params['department']);
                break;
            case "经济管理学院":
                $result = EconMangementModel::getDepartmentTimeTable($params['grade'], $params['department']);
                break;
            case "计算机学院":
                $result = CompSciModel::getDepartmentTimeTable($params['grade'], $params['department']);
                break;
            default:
                $result = null;
        }

        if ($result->isEmpty()) {
            throw new TimeTableException();
        }

        return $result;

    }

    public function getAllList(){
//        $result = [
//            'result1' => CulturalSocietyModel::getSearchList(),
//            'result2' => MechEngineeringModel::getSearchList(),
//            'result3' => EletronicScitModel::getSearchList(),
//            'result4' => EconMangementModel::getSearchList(),
//            'result5' => CompSciModel::getSearchList()
//        ];

        $result = FacultyModel::getList();

        return $result;
    }

}