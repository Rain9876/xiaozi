<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::get('api/:version/banner/:id','api/:version.Banner/getBanner');

Route::get('api/:version/postArticle/:id','api/:version.PostArticle/getPostArticleDetail');
Route::get('api/:version/postArticle','api/:version.PostArticle/getAllPostArticle');

Route::get('api/:version/homeSection','api/:version.HomeSection/getSection');
Route::get('api/:version/article/:id','api/:version.Article/getArticle');

Route::get('api/:version/society','api/:version.Event/getAllSocieties');
Route::get('api/:version/society/:id','api/:version.Event/getSociety');

Route::get('api/:version/organization','api/:version.Event/getAllOrganizations');
Route::get('api/:version/organization/:id','api/:version.Event/getOrganization');

Route::get('api/:version/activity','api/:version.Event/getAllActivities');
Route::get('api/:version/activity/:id','api/:version.Event/getActivity');

Route::get('api/:version/timeTable','api/:version.TimeTable/getTimeTable');
Route::get('api/:version/departmentTimeTable','api/:version.TimeTable/getDepartmentTimeTable');
Route::get('api/:version/timeTable/list','api/:version.TimeTable/getAllList');

Route::get('api/:version/selfStudy','api/:version.SelfStudy/getStudyRoom');
Route::get('api/:version/selfStudy/getList','api/:version.SelfStudy/getSearchList');

Route::get('api/:version/linkage','api/:version.Linkage/getLinkages');
