<?php

/**
 * 商品的控制类(类名需要和文件名一致)
 */
class GoodsController
{
    /**
     * 商品的列表操作
     */
    public function index()
    {
        echo '这里是商品的列表';
    }

    /**
     * 商品的添加表单
     */
    public function add()
    {
        echo '这里是商品的添加表单';
    }

    /**
     * 商品的执行添加
     */
    public function insert()
    {
        echo '这里执行商品的信息添加';
    }

    /**
     * 商品的删除操作
     */
    public function delete()
    {
        echo '这里是商品的信息删除';
    }

    /**
     * 商品的修改表单
     */
    public function edit()
    {
        echo '这里是商品的修改表单';
    }

    /**
     * 商品的执行修改
     */
    public function update()
    {
        echo '这里是执行商品信息修改';
    }
}