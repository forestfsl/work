<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function register(){
    	$this->display();
    }
    public function checkUser(){
    	$username=I('post.username');
    	$info=M('user')->getByusername($username);
    	echo $info===null?0:1;
    }

}