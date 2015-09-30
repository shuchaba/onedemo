<?php
return array(
    //重新设置页面模板路径
    'VIEW_PATH'=>'./Tpl/Onedemo/',
    //先设置空控制方法，然后设置错误页面跳转，关闭index.php debug
    'TMPL_ACTION_ERROR'     => 'Public/dispatch_jump',
	'TMPL_ACTION_SUCCESS'     => 'Public/dispatch_jump',
);