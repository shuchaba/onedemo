<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/22
 * Time: 15:39
 */
namespace Common\Controller;

use Think\Controller;

class BaseController extends Controller{

    public function _empty($name){
        $this->error();//需要设置TMPL_ACTION_ERROR
    }
//    protected function _initialize(){
//
//    }
}