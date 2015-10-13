<?php
namespace Onedemo\Controller;
use Common\Controller\BaseController;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
        $this->display("index");
    }
    public function add(){
       if(IS_AJAX){
            $index = M('Index');
           $data = I('post.');
           $data['times'] = time();
           $phiz = array(
               'zhuakuang'=>'抓狂',
               'baobao' =>'抱抱',
               'haixiu' =>'害羞',
               'ku'=>'酷',
               'xixi'=>'嘻嘻',
               'taikaixin'=>'太开心',
               'touxiao'=>'偷笑',
               'qian'=>'钱',
               'huaxin'=>'花心',
               'jiyan'=>'挤眼'
           );
            $result = $index->add($data);
           if($result){
               $this->ajaxReturn(1,array('message'=>'添加成功'));
           }else{
               $this->ajaxReturn(0,array('message'=>'添加失败'));
           }
       }else{
           $this->display('index');
       }

    }
}