<?php
namespace app\lib\file;

class File
{
    public function create($fileName)
    {
        return fopen($fileName, "w") ? true : false;
    }

    public function exists($fileName)
    {
        //clearstatcache();//清除缓存文件状态
        return file_exists($fileName);
    }

    public function delete($fileName)
    {
        return unlink($fileName);
    }
}