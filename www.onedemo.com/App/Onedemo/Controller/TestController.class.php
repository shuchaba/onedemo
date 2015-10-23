<?php
namespace Onedemo\Controller;
use Common\Controller\BaseController;
use Think\Controller;
use Onedemo\Controller\GrepController;
use Onedemo\Controller\EmptyController;
use Think\Db\Driver\Pdo;

class TestController extends BaseController {


    public function index(){
        $url="http://www.onedemo.com/jibing3.html";
        $contents = file_get_contents($url);
//$contents = file_put_contents('zhengzhuang3.html',$contents);
//$contents = file_get_contents($url);
//如果出现中文乱码使用下面代码
//$getcontent = iconv("utf-8", "gb2312",$contents);
//        $mycontent = explode('<div id="o_l">',$contents);
//        $mycontent2 = explode('<div id="o_r">',$mycontent[1]);
//        $lastcontent = str_replace(' ','',$mycontent2[0]);
//        $lastcontent1 = str_replace('	','',$lastcontent);
//        $infoarr = explode('<listyle="width:400px;">',$lastcontent1);
//echo $contents;
        //$lastcontent = str_replace(' ','',$mycontent2[0]);
        //$infoarr = explode('</div>
///<divclass="bk_cborclearfix">',$lastcontent1);
//        p($infoarr);
//preg_match_all('/http:\/\/[0-9a-z\.\/\-]+\/[0-9a-z\.\/\-]+/',$url,$arr);
//preg_match_all('/(https?:\/\/)?([0-9a-z\.]+)/',$contents,$arr);
//preg_match_all('/(http|https|ftp|file){1}(:\/\/)?([\da-z-\.]+)\.([a-z]{2,6})([\/\w \.-?&%-=]*)*\/?/',$contents,$arr);
//preg_match_all('/(http|https)(:\/\/)[0-9a-z\.]+\/[a-z\.]+\/[a-z\.]+\/[0-9\.]+\/[a-z\.]+/is',$contents,$arr);//Url地址
//preg_match_all('/\<a href=\"(.*?)\".*?\>(.*?)\<\/a\>/i',$contents,$arr);//Url地址
//preg_match_all('/<a href="([0-9a-z].*?)"\>(.*?)<\/a>/is',$contents,$arr);//Url地址
//      preg_match_all('/<div class=\"bkl_con bkl_con_all\"\>(.*?)<\/div>/is',$contents,$arr);
       preg_match_all('/<a href="(http:\/\/[0-9a-z\.]+\/[a-z\.]+\/[a-z\.]+\/[0-9\.]+\/[a-z\.]+)".*?\>(.*?)<\/a>/is',$contents,$arr);  //ok
//preg_match_all('/<div class=\"bk_c bor clearfix\".*?\>(.*?)<\/div>/is',$contents,$arr);
//        p($arr);

//var_dump($arr);

        //外科
    foreach ($arr[1] as $keys=>$v) {
        if($arr[2][$keys]<>""){
            $data[]=array(
                'URL'=>$arr[1][$keys],
                'NAME'=>$arr[2][$keys],
                'CLASS_ID'=>3749
            );
        }
    }
    $mod = M('Malady');
    foreach($data as $value){
        $id[] = $mod->data($value)->add();
    }
    $new_data = array();
    foreach($data as $key=> $val){
        $val['MALADY_ID'] = $id[$key];
        $new_data[$key] = $val;
//            $data[$key]['tp_id']=$id[$key];
    }
//        p($new_data);

        foreach($new_data as $key=>$item){
            $ch = curl_init($item['URL']);
            curl_setopt($ch ,CURLOPT_ENCODING, "utf-8" );
            curl_setopt($ch ,CURLOPT_RETURNTRANSFER, true);
            $info = curl_exec($ch);
            curl_close($ch);

            $info_start = 0;
            $info_end = strpos($info, "o_l") + strlen('o_l">');

            for($j=0; $j<15; $j++){
//				echo $info_start." ".$info_end."<br>";
                $info_start = strpos($info, 'h2 id="bs1">', $info_end) + strlen('h2 id="bs1">');
                if($info_start > $info_end) {
                    $info_end = strpos($info, '<div class="tool">', $info_start) + strlen('<div class="tool">');
                    $info_len = $info_end - $info_start;
                    $child_info = substr($info, $info_start, $info_len);
//                图片
                    $src_start = strpos($child_info, 'src="') + strlen('src="');
                    $src_end = strpos($child_info, '"', $src_start);
                    $src_len = $src_end - $src_start;
                    $img['img'] = substr($child_info, $src_start, $src_len);

//                var_dump($img);
//                //标题
                    $title_start = strpos($child_info, '</span>') + strlen('</span>');
                    $title_end = strpos($child_info, '<a', $title_start);
                    $title_len = $title_end - $title_start;
                    $map["TITLE"] = substr($child_info, $title_start, $title_len);
//                //简介
                    $remark_start = strpos($child_info, '<p>', $title_end) + strlen('<p>');
                    $remark_end = strpos($child_info, '<div class="tool">', $remark_start);
                    $remark_len = $remark_end - $remark_start;
                    $str = substr($child_info, $remark_start, $remark_len);
//                $str1 =  preg_replace("/<a[^>]*>/","", $str);
//                $str2 =  preg_replace("/<\/a>/","", $str1);
                    $map['INTRODUCTION'] = str_replace('/\n/', '', str_replace('&nbsp;', '', strip_tags($str)));




                    $map['MALADY_ID'] = $item['MALADY_ID'];
//p($map);


				D("MaladyIntroduction")->add($map);
                }
//				echo D("Info")->getLastSql();
            }
        }
        /**
         *先获取，然后保存本地，显示所有a标签
         * 然后获取本地的html页面，最后进行比对，入库。
         *
         *
         * */

    }



}