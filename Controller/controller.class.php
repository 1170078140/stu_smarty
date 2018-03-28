<?php
/**
 * Created by PhpStorm.
 * User: hxsd
 * Date: 2018/1/12
 * Time: 16:22
 */

    class controller extends Smarty
    {
        public function __construct()
        {
//            var_dump($this);
            parent::__construct();
            $this->template_dir='./View';
            $this->compile_dir='./View_c';
        }
        /**
         * 成功提示
         */
        public function success($message,$path,$time)
        {
            //将查询的结果压入
            $this->assign('message',$message);
            $this->assign('path',$path);
            $this->assign('time',$time);

            //解析模板
            $this->display('success.html');
        }

        /**
         * 失败提示
         */
        public function error($message,$path,$time)
        {
            //将查询的结果压入
            $this->assign('message',$message);
            $this->assign('path',$path);
            $this->assign('time',$time);

            //解析模板
            $this->display('success.html');
        }
    }