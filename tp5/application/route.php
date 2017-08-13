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

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],



//首页
    'index'=>'index/index/index',
//    u计划的路由
    'uplan'=>'index/uplan/uplan',
//    优选计划的路由
    'premium'=>'index/premium/premium',
//    新计划的路由
    'autoinvest'=>'index/autoinvest/autoinvest',
//    登录注册路由
    'login'=>'index/login/login',
];