<?php
//定义回调URL通用的URL 线上请改成自己的
define('URL_CALLBACK', 'http://www.commao.com/Login/auth/type/');
return array(
    //腾讯QQ登录配置
    'THINK_SDK_QQ' => array(
        'APP_KEY'    => '1104671561', //应用注册成功后分配的 APP ID
        'APP_SECRET' => 'P8dMxNIm3Rw1Xln1', //应用注册成功后分配的KEY
        'CALLBACK'   => URL_CALLBACK .qq,
    ),
	//'配置项'=>'配置值'
    /* 模块相关配置 */
    'DEFAULT_MODULE'     => 'Onedemo',	// 默认模块
    'MODULE_ALLOW_LIST'     =>  array('Onedemo'),	// 允许访问的模块列表
    'MODULE_DENY_LIST'   => array('Common'),			// 禁止访问的模块列表
    /* URL配置 */
    'URL_CASE_INSENSITIVE' => false, //默认false 表示URL区分大小写 true则表示不区分大小写 window不区分
    'URL_MODEL'            => 2, //URL模式
    'VAR_URL_PARAMS'       => '', // PATHINFO URL参数变量
    'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符
    'URL_ROUTER_ON'         =>  true,   // 是否开启URL路由
    //模板引擎
    'TMPL_ENGINE_TYPE' =>'Smarty',
    //模板替换
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => 'http://resource.onedemo.com/v2015/Public',
        '__IMG__' => 'http://resource.onedemo.com/v2015/Public/img',
        '__JS__' => 'http://resource.onedemo.com/v2015/Public/js',
        '__CSS__' => 'http://resource.onedemo.com/v2015/Public/css',
    ),
    /*系统语言配置*/ //而且只能用Thinkphp模板引擎
//    'LANG_SWITCH_ON'   => true,   // 开启语言包功能
//    'LANG_LIST'        => 'zh-cn', // 允许切换的语言列表 用逗号分隔
//    'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
);