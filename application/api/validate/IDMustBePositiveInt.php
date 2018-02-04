<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 20/01/2018
 * Time: 8:38 AM
 */

namespace app\api\validate;

class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ];

    protected  $message = [
        'id' => 'id必须是正整数;'
    ];
}
