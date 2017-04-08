<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
class LoginController extends Controller{
    public function login(){
        $this->display();
    }
    //登录验证
    public function loginin(){
        $login_model = M('Login');die;
        //dump($_POST);die;
//        $verfig = new \Think\Verify();
//        if(!$verfig->check(I('post.Yzm'))){
//            $this->error('验证码错误');
//        }
        $name = I('post.name');
        $pwd = I('post.pwd');
        $user = M('User');
        //根据用户名从查找
        $row = $user->where("game_name=".$name)->find();
        if($row){
            //判断密码是否正确
            if($pwd == $row['game_pwd']){
                $this->success('登陆成功',U('Index/index'));
            }else{
                $this->error('用户名或密码错误');
            }
        }else{
            $this->error('用户名或密码错误');
        }
    }
    public function verify()
    {
        $arr = array(
            'length' => 4,
            'fontSize' => 35,
            'fontttf' => '5.ttf',
        );
        $Verify = new Verify($arr);
        //$Verify->length = 4;

        $Verify->entry();
    }
   /* public function verify_c(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 18;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->codeSet = '0123456789';
        $Verify->imageW = 130;
        $Verify->imageH = 50;
        //$Verify->expire = 600;
        $Verify->entry();
    }*/

    //生成中文验证码
    /*public function zh_verify(){
        $Verify = new \Think\Verify();
        // 验证码字体使用 ThinkPHP/Library/Think/Verify/ttfs/5.ttf
        $Verify->useZh = true;
        $Verify->fontttf = 'msyh.ttc';
        $Verify->fontSize = 40;
        $Verify->length = 4;
        $Verify->entry();
    }*/
}