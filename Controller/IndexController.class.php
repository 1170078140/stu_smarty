<?php

/**
 * 默认的控制类(类名需要和文件名一致)
 */
class IndexController
{
    /**
     * 默认的列表操作
     */
    public function index()
    {
        echo '这里是默认的列表';
    }

    /**
     * 默认的添加表单
     */
    public function add()
    {
        echo '这里是默认的添加表单';
    }

    /**
     * 默认的执行添加
     */
    public function insert()
    {
        echo '这里执行默认的信息添加';
    }

    /**
     * 默认的删除操作
     */
    public function delete()
    {
        echo '这里是默认的信息删除';
    }

    /**
     * 默认的修改表单
     */
    public function edit()
    {
        echo '这里是默认的修改表单';
    }

    /**
     * 默认的执行修改
     */
    public function update()
    {
        echo '这里是执行默认信息修改';
    }
}