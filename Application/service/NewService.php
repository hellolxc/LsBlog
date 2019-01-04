<?php
/**
 * Created by PhpStorm.
 * User: jiumeng
 * Date: 18-12-4
 * Time: 下午9:10
 */

namespace app\service;

use app\lib\file\File;

class NewService
{
    /** @var File $file */
    protected $file;

    public function __construct()
    {
        $this->file = new File();
    }

    public function create($fileName)
    {
        $result = $this->file->exists($fileName);

        if ($result) {
            throw new \Exception('文件已存在');
        }

        return $this->file->create($fileName);
    }
}
