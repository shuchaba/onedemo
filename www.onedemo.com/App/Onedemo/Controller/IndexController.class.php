<?php
namespace Onedemo\Controller;
use Common\Controller\BaseController;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
        $this->display("index");
    }
}