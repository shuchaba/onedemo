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
           $data = I('post.');
           $data['times']=time();
           $data['get_ip']=get_client_ip();
           $this->replace_phiz($data['content']);
//           $phiz = array(
//               'zhuakuang'=>'抓狂',
//               'baobao' =>'抱抱',
//               'haixiu' =>'害羞',
//               'ku'=>'酷',
//               'xixi'=>'嘻嘻',
//               'taikaixin'=>'太开心',
//               'touxiao'=>'偷笑',
//               'qian'=>'钱',
//               'huaxin'=>'花心',
//               'jiyan'=>'挤眼'
//           );
//           F('phiz',$phiz,'./Data/');//快速缓存写入数据
//           $phiz = F('phiz','','./Data/');
           if($id = M('Index')->add($data)){
               $data['id'] = $id;
               $data['content'] = $this->replace_phiz($data['content']);
               $data['times'] = date('Y-m-d H:i:s',$data['times']);
               $this->ajaxReturn(1,'添加成功','','index');
           }else{
               $this->ajaxReturn(0,'添加失败','','index');
           }
       }

    }
    public function selectData(){
        $mod = M('Index');
        $list = $mod->select();
        $this->assign('list',$list);
    }

}