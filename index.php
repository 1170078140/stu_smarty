<?php
/**
 * Created by PhpStorm.
 * User: hxsd
 * Date: 2018/1/11
 * Time: 15:44
 */

    //引入文件
    require "./Conf/config.php";
    require "./Model/Model.class.php";

    // 2.2 实例化controller类时自动调用函数，引入类文件
    function __autoload($className)
    {
        //判断Controller目录中是否存在指定的控制器文件
        if(file_exists('./Controller/'.$className.'.class.php')){
            require './Controller/'.$className.'.class.php';
        }elseif(file_exists('./Libs/'.$className.'/'.$className.'.class.php')){
            //3.引入Smarty类库
            require './Libs/smarty/Smarty.class.php';
        }
    }



    //1. 接收参数c，哪个controller类
    $c=$_GET['c']??'index';

    //1.2 拼接完整的类名
    $controller=$c.'Controller';

    //2. 实例化controller类
    $user=new $controller;

    //3. 接收参数a ， 哪个方法
    $action=$_GET['a']??'index';



    //3.2 调用类中的方法
    $user->$action();


?>