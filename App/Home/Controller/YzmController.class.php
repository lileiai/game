<?php
/**
 * Created by PhpStorm.
 * User: lilei
 * Date: 2017/3/25
 * Time: 18:47
 */
namespace Home\Controller;
use Think\Controller;
class YzmController extends Controller{
//    public function Yzm{
//        $verfig = new \Think\Verify();
//        if(!$verfig->check(I('post.Yzm'))){
//            $this->error('验证码错误');
//        }
//    }
    public function verify()
    {
        $arr = array(
            'length' => 4,
            'fontSize' => 35,
            'fontttf' => '5.ttf',
        );
        $Verify = new \Think\Verify($arr);
        //$Verify->length = 4;

        $Verify->entry();
    }
}