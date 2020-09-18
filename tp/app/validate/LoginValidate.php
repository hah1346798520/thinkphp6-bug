<?php
declare (strict_types = 1);

namespace app\validate;

use think\Validate;

class LoginValidate extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
	    '__token__|表单令牌'=>'token',
        'verify|验证码'=>'captcha',
        'username|用户名' => 'require|alphaDash|length:3,20',
        'password|密码' => 'require|length:3,20',
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [];
}
