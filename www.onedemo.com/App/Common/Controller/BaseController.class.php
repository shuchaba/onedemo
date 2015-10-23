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


    protected function ajaxReturn($status=1, $msg='', $data='', $dialog='') {
        parent::ajaxReturn(array(
            'status' => $status,
            'message' => $msg,
            'data' => $data,
            'dialog' => $dialog,
        ));
    }

    public function replace_phiz($content){
        preg_match_all('/\[.*?\]/is',$content,$arr);
        if($arr[0]){
            $phiz = F('phiz','','./Data/');
            foreach($arr[0] as $v){
               foreach($phiz as $key=>$value){
                   if($v == '['.$value.']'){
                       $content = str_replace($v,'<img src="'.C('TMPL_PARSE_STRING.__IMG__').'/phiz/'.$key.'.gif'.'"/>',$content);
                   }
                   continue;//跳出当层循环
               }
            }
        }
        return $content;
    }
}