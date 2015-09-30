<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/24
 * Time: 10:51
 */
namespace Onedemo\Controller;
use Common\Controller\BaseController;
use Common\Api\AppConnect;
class QQLoginController extends BaseController{
    public function index(){
        echo 1;
        $qq = new AppConnect();
        $appkey = C('THINK_SDK_QQ.APP_KEY');
        dump($appkey);
        $scope = C('THINK_SDK_QQ.APP_SECRET');
        dump($scope);
        $callback = C('THINK_SDK_QQ.CALLBACK');
        dump($callback);
        $qq->login($appkey, $callback, $scope);
    }

}