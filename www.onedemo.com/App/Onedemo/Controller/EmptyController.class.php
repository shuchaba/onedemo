<?php
/**
 * 空控制器必须这样子写。空方法只需要继承某个控制器就可以了。
 *本案例移步到BaseController  _empty($name)方法
 * 还要设置跳转页面路径
 */
namespace Onedemo\Controller;
use Think\Controller;
class EmptyController extends Controller {
    public function _empty($name){
        $this->display("Layout:404");
    }
}