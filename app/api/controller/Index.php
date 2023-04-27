<?php
/**
  * 没有定义路由的情况下访问URL地址是
  * http://localhost/index.php/api(模块名)/控制器名/方法名 
 */

namespace app\api\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return 'Hello World!';
    }
}
