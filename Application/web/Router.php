<?php
namespace app\web;

use app\lib\file\File;

class Router
{
    public $uri;

    public function run()
    {
        //echo $_SERVER['PHP_SELF'];
        //var_dump($_SERVER['REQUEST_URI']);
        $this->uri = $_SERVER['REQUEST_URI'];
        if ($this->isAdminRouter()) {
            $this->adminRouter();
        } else {
            $this->webSiteRouter();
        }
    }

    //后台用
    public function adminRouter()
    {
        echo 'admin';
    }

    //预览用
    public function webSiteRouter()
    {
        $file = new File();

        $tempPath = DOCUMENT_ROOT."website{$this->uri}";

        if ($this->uri == '/') {//加载首页
            $path = DOCUMENT_ROOT.'website/index.html';
        } elseif ($file->isCategory($tempPath)) {//是否是文件夹
            $path = $tempPath.'/index.html';
        } elseif ($file->isHtmlFile($tempPath)) {//是否是HTML文件
            $path = $tempPath;
        } else {
            $path = $tempPath;
        }


        $content = $file->load($path);

        if ($content === false) {
            //加载404界面
            echo 404;
        } else {
            echo $content;
        }
    }


    public function isAdminRouter()
    {
        return !(strpos($this->uri, 'admin') === false);
    }
}
