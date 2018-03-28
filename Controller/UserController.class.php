<?php
/**
 * Created by PhpStorm.
 * User: hxsd
 * Date: 2018/1/11
 * Time: 15:48
 */

    /**
     * 用户的控制类(类名需要和文件名一致)
     */
    class UserController extends controller
    {
        /**
         * 用户的列表操作
         */
        public function index()
        {
//            var_dump($this);

            //实例化Model类，并查询结果
            $stu=new Model('stu');
            $res=$stu->select();

            //将查询的结果压入
            $this->assign('res',$res);

            //解析模板
            $this->display('index.html');
        }

        /**
         * 商品的添加表单
         */
        public function add()
        {
            $this->display('add.html');
        }

        /**
         * 商品的执行添加
         */
        public function insert()
        {
            $_POST['hobby']=implode(',',$_POST['hobby']);

            //实例化Model类，并执行添加
            $stu=new Model('stu');
            $res=$stu->add($_POST);

            if($res){
                $this->success('恭喜，添加成功','index.php?c=user&a=index',3);
            }else{
                $this->error('抱歉，添加失败','index.php?c=user&a=add',3);
            }
        }


        /**
         * 商品的删除操作
         */
        public function delete()
        {
            //实例化Model类，并执行添加
            $stu=new Model('stu');
            $res=$stu->del($_GET['i']);

            if($res){
                $this->success('恭喜，删除成功','index.php?c=user&a=index',3);
            }else{
                $this->error('抱歉，删除失败','index.php?c=user&a=index',3);
            }
        }

        /**
         * 商品的修改表单
         */
        public function edit()
        {
            //实例化Model类，并执行查找
            $stu=new Model('stu');
            $res=$stu->find($_GET['i']);

            //爱好，字符串改数组
            $res['hobby']=explode(',',$res['hobby']);

            //将查询的结果压入
            $this->assign('res',$res);

            //解析模板
            $this->display('edit.html');
        }

        /**
         * 商品的执行修改
         */
        public function update()
        {
            $_POST['hobby']=implode(',',$_POST['hobby']);

            //实例化Model类，并执行添加
            $stu=new Model('stu');
            $res=$stu->save($_POST);

            if($res){
                $this->success('恭喜，修改成功',$_SERVER['HTTP_REFERER'],3);
            }else{
                $this->error('抱歉，修改失败',$_SERVER['HTTP_REFERER'],3);
            }
        }

    }