<?php
namespace app\web;

class Router
{
	public function run()
	{
	    echo $_SERVER['PHP_SELF'];
	}

	//后台用
	public function adminRouter()
    {
    }

    //预览用
    public function webSiteRouter()
    {
    }
}