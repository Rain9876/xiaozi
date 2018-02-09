<?php 
return array (
  'get' => 
  array (
    'api/:version/banner/:id' => 
    array (
      'rule' => 'api/:version/banner/:id',
      'route' => 'api/:version.Banner/getBanner',
      'var' => 
      array (
        'version' => 1,
        'id' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/postArticle/:id' => 
    array (
      'rule' => 'api/:version/postArticle/:id',
      'route' => 'api/:version.PostArticle/getPostArticleDetail',
      'var' => 
      array (
        'version' => 1,
        'id' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/postArticle' => 
    array (
      'rule' => 'api/:version/postArticle',
      'route' => 'api/:version.PostArticle/getAllPostArticle',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/homeSection' => 
    array (
      'rule' => 'api/:version/homeSection',
      'route' => 'api/:version.HomeSection/getSection',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/article/:id' => 
    array (
      'rule' => 'api/:version/article/:id',
      'route' => 'api/:version.Article/getArticle',
      'var' => 
      array (
        'version' => 1,
        'id' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/society' => 
    array (
      'rule' => 'api/:version/society',
      'route' => 'api/:version.Event/getAllSocieties',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/society/:id' => 
    array (
      'rule' => 'api/:version/society/:id',
      'route' => 'api/:version.Event/getSociety',
      'var' => 
      array (
        'version' => 1,
        'id' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/organization' => 
    array (
      'rule' => 'api/:version/organization',
      'route' => 'api/:version.Event/getAllOrganizations',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/organization/:id' => 
    array (
      'rule' => 'api/:version/organization/:id',
      'route' => 'api/:version.Event/getOrganization',
      'var' => 
      array (
        'version' => 1,
        'id' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/activity' => 
    array (
      'rule' => 'api/:version/activity',
      'route' => 'api/:version.Event/getAllActivities',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/activity/:id' => 
    array (
      'rule' => 'api/:version/activity/:id',
      'route' => 'api/:version.Event/getActivity',
      'var' => 
      array (
        'version' => 1,
        'id' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/timeTable' => 
    array (
      'rule' => 'api/:version/timeTable',
      'route' => 'api/:version.TimeTable/getTimeTable',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/departmentTimeTable' => 
    array (
      'rule' => 'api/:version/departmentTimeTable',
      'route' => 'api/:version.TimeTable/getDepartmentTimeTable',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/timeTable/list' => 
    array (
      'rule' => 'api/:version/timeTable/list',
      'route' => 'api/:version.TimeTable/getAllList',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/selfStudy' => 
    array (
      'rule' => 'api/:version/selfStudy',
      'route' => 'api/:version.SelfStudy/getStudyRoom',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/selfStudy/getList' => 
    array (
      'rule' => 'api/:version/selfStudy/getList',
      'route' => 'api/:version.SelfStudy/getSearchList',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
    'api/:version/linkage' => 
    array (
      'rule' => 'api/:version/linkage',
      'route' => 'api/:version.Linkage/getLinkages',
      'var' => 
      array (
        'version' => 1,
      ),
      'option' => 
      array (
        'complete_match' => true,
      ),
      'pattern' => 
      array (
      ),
    ),
  ),
  'post' => 
  array (
  ),
  'put' => 
  array (
  ),
  'delete' => 
  array (
  ),
  'patch' => 
  array (
  ),
  'head' => 
  array (
  ),
  'options' => 
  array (
  ),
  '*' => 
  array (
  ),
  'alias' => 
  array (
  ),
  'domain' => 
  array (
  ),
  'pattern' => 
  array (
  ),
  'name' => 
  array (
    'api/:version.banner/getbanner' => 
    array (
      0 => 
      array (
        0 => 'api/:version/banner/:id',
        1 => 
        array (
          'version' => 1,
          'id' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.postarticle/getpostarticledetail' => 
    array (
      0 => 
      array (
        0 => 'api/:version/postArticle/:id',
        1 => 
        array (
          'version' => 1,
          'id' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.postarticle/getallpostarticle' => 
    array (
      0 => 
      array (
        0 => 'api/:version/postArticle',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.homesection/getsection' => 
    array (
      0 => 
      array (
        0 => 'api/:version/homeSection',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.article/getarticle' => 
    array (
      0 => 
      array (
        0 => 'api/:version/article/:id',
        1 => 
        array (
          'version' => 1,
          'id' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.event/getallsocieties' => 
    array (
      0 => 
      array (
        0 => 'api/:version/society',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.event/getsociety' => 
    array (
      0 => 
      array (
        0 => 'api/:version/society/:id',
        1 => 
        array (
          'version' => 1,
          'id' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.event/getallorganizations' => 
    array (
      0 => 
      array (
        0 => 'api/:version/organization',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.event/getorganization' => 
    array (
      0 => 
      array (
        0 => 'api/:version/organization/:id',
        1 => 
        array (
          'version' => 1,
          'id' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.event/getallactivities' => 
    array (
      0 => 
      array (
        0 => 'api/:version/activity',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.event/getactivity' => 
    array (
      0 => 
      array (
        0 => 'api/:version/activity/:id',
        1 => 
        array (
          'version' => 1,
          'id' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.timetable/gettimetable' => 
    array (
      0 => 
      array (
        0 => 'api/:version/timeTable',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.timetable/getdepartmenttimetable' => 
    array (
      0 => 
      array (
        0 => 'api/:version/departmentTimeTable',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.timetable/getalllist' => 
    array (
      0 => 
      array (
        0 => 'api/:version/timeTable/list',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.selfstudy/getstudyroom' => 
    array (
      0 => 
      array (
        0 => 'api/:version/selfStudy',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.selfstudy/getsearchlist' => 
    array (
      0 => 
      array (
        0 => 'api/:version/selfStudy/getList',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
    'api/:version.linkage/getlinkages' => 
    array (
      0 => 
      array (
        0 => 'api/:version/linkage',
        1 => 
        array (
          'version' => 1,
        ),
        2 => NULL,
        3 => NULL,
      ),
    ),
  ),
);