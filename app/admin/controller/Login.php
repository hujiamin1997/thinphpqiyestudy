<?php


namespace app\admin\controller;


class Login
{
    public function initialize(){
        //判断是否已经登录，登录了直接跳转
        $account=session('admin');
    }
    public function index(){
        return view();
    }
}