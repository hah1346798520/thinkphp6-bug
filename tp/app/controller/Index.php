<?php

namespace app\controller;

use app\BaseController;
use app\validate\LoginValidate;
use think\exception\ValidateException;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        return View::fetch();
    }

    public function login()
    {
        $data = $this->request->post();
        try {
            validate(LoginValidate::class)->check($data);
        } catch (ValidateException $e) {
            // 验证失败 输出错误信息
            return json(['msg' => $e->getMessage()]);
        }
        return json(['msg' => "成功！"]);
    }

    public function token()
    {
        return request()->buildToken();
    }
}
