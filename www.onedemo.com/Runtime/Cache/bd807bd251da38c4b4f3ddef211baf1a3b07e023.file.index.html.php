<?php /* Smarty version Smarty-3.1.6, created on 2015-09-28 09:56:16
         compiled from "./Tpl/Onedemo\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:26574560899f3d08606-26973598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd807bd251da38c4b4f3ddef211baf1a3b07e023' => 
    array (
      0 => './Tpl/Onedemo\\Index\\index.html',
      1 => 1443405372,
      2 => 'file',
    ),
    '9cf6cce756e1ebfe6a1a9fe3a90e7d63176044a7' => 
    array (
      0 => './Tpl/Onedemo\\Layout\\base.html',
      1 => 1443059991,
      2 => 'file',
    ),
    'e87ce62f42f21da455fce0f2ed766e15c514f1bb' => 
    array (
      0 => './Tpl/Onedemo\\Header\\header.html',
      1 => 1442992923,
      2 => 'file',
    ),
    'baf54ee7b6c2d71b6c96af97c3b23f2f46267153' => 
    array (
      0 => './Tpl/Onedemo\\Footer\\footer.html',
      1 => 1442994994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26574560899f3d08606-26973598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_560899f3e92ee',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560899f3e92ee')) {function content_560899f3e92ee($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>HouDun许愿墙</title>
    
    <link rel="stylesheet" href="<?php echo C('TMPL_PARSE_STRING.__CSS__');?>
/index.css" />
    
    
    <script type="text/javascript" src="<?php echo C('TMPL_PARSE_STRING.__JS__');?>
/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo C('TMPL_PARSE_STRING.__JS__');?>
/index.js"></script>
    
</head>
<body>
<?php /*  Call merged included template "Header/header.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('Header/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '26574560899f3d08606-26973598');
content_56089e402f600($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "Header/header.html" */?>

<div id='top'>
    <span id='send'></span>
</div>
<div><a href="<?php echo U('QQLogin/index');?>
">腾讯QQ用户登录</a></div>
<div id='main'>
    <dl class='paper a1'>
        <dt>
            <span class='username'>后盾网</span>
            <span class='num'>No.00001</span>
        </dt>
        <dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
        <dd class='bottom'>
            <span class='time'>今天08:30</span>
            <a href="" class='close'></a>
        </dd>
    </dl>
    <dl class='paper a2'>
        <dt>
            <span class='username'>后盾网</span>
            <span class='num'>No.00001</span>
        </dt>
        <dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
        <dd class='bottom'>
            <span class='time'>今天08:30</span>
            <a href="" class='close'></a>
        </dd>
    </dl>
    <dl class='paper a3'>
        <dt>
            <span class='username'>后盾网</span>
            <span class='num'>No.00001</span>
        </dt>
        <dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
        <dd class='bottom'>
            <span class='time'>今天08:30</span>
            <a href="" class='close'></a>
        </dd>
    </dl>
    <dl class='paper a4'>
        <dt>
            <span class='username'>后盾网</span>
            <span class='num'>No.00001</span>
        </dt>
        <dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
        <dd class='bottom'>
            <span class='time'>今天08:30</span>
            <a href="" class='close'></a>
        </dd>
    </dl>
    <dl class='paper a5'>
        <dt>
            <span class='username'>后盾网</span>
            <span class='num'>No.00001</span>
        </dt>
        <dd class='content'>大家今天要好好把后台布局完成大家今天要好好把后台布局完成大家今天要好好把后台布局完成</dd>
        <dd class='bottom'>
            <span class='time'>今天08:30</span>
            <a href="" class='close'></a>
        </dd>
    </dl>
</div>

<div id='send-form'>
    <p class='title'><span>许下你的愿望</span><a href="" id='close'></a></p>
    <form action="" name='wish'>
        <p>
            <label for="username">昵称：</label>
            <input type="text" name='username' id='username'/>
        </p>
        <p>
            <label for="content">愿望：(您还可以输入&nbsp;<span id='font-num'>50</span>&nbsp;个字)</label>
            <textarea name="content" id='content'></textarea>
        <div id='phiz'>
            <img src="<?php echo C('TMPL_PARSE_STRING.__IMG__');?>
/phiz/zhuakuang.gif" alt="抓狂" />
            <img src="<?php echo C('TMPL_PARSE_STRING.__IMG__');?>
/phiz/baobao.gif" alt="抱抱" />
            <img src="<?php echo C('TMPL_PARSE_STRING.__IMG__');?>
/phiz/haixiu.gif" alt="害羞" />
            <img src="<?php echo C('TMPL_PARSE_STRING.__IMG__');?>
/phiz/ku.gif" alt="酷" />
            <img src="<?php echo C('TMPL_PARSE_STRING.__IMG__');?>
/phiz/xixi.gif" alt="嘻嘻" />
            <img src="<?php echo C('TMPL_PARSE_STRING.__IMG__');?>
/phiz/taikaixin.gif" alt="太开心" />
            <img src="<?php echo C('TMPL_PARSE_STRING.__IMG__');?>
/phiz/touxiao.gif" alt="偷笑" />
            <img src="<?php echo C('TMPL_PARSE_STRING.__IMG__');?>
/phiz/qian.gif" alt="钱" />
            <img src="<?php echo C('TMPL_PARSE_STRING.__IMG__');?>
/phiz/huaxin.gif" alt="花心" />
            <img src="<?php echo C('TMPL_PARSE_STRING.__IMG__');?>
/phiz/jiyan.gif" alt="挤眼" />
        </div>
        </p>
        <span id='send-btn'></span>
    </form>
</div>
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo C('TMPL_PARSE_STRING.__JS__');?>
/iepng.js"></script>
<script type="text/javascript">
    DD_belatedPNG.fix('#send,#close,.close','background');
</script>
<![endif]-->

<?php /*  Call merged included template "Footer/footer.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('Footer/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '26574560899f3d08606-26973598');
content_56089e403f7d4($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "Footer/footer.html" */?>
</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.6, created on 2015-09-28 09:56:16
         compiled from "./Tpl/Onedemo\Header\header.html" */ ?>
<?php if ($_valid && !is_callable('content_56089e402f600')) {function content_56089e402f600($_smarty_tpl) {?>header.html
<?php }} ?><?php /* Smarty version Smarty-3.1.6, created on 2015-09-28 09:56:16
         compiled from "./Tpl/Onedemo\Footer\footer.html" */ ?>
<?php if ($_valid && !is_callable('content_56089e403f7d4')) {function content_56089e403f7d4($_smarty_tpl) {?>footer.html<?php }} ?>