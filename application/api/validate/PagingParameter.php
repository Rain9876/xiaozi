<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 29/01/2018
 * Time: 11:32 PM
 */

namespace app\api\validate;


class PagingParameter extends BaseValidate
{
    protected $rule = [
        'page' => 'isPositiveInteger',
        'count'=>'isPositiveInteger'
    ];

    protected  $message = [
        'page' => 'page必须是正整数',
        'count'=>'count必须是正整数'
    ];
}