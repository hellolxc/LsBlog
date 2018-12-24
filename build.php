<?php
$exts = ['php'];            // 需要打包的文件后缀
$dir = __DIR__;             // 需要打包的目录
$file = 'ls.phar';          // 包的名称, 注意它不仅仅是一个文件名, 在stub中也会作为入口前缀
$phar = new Phar(__DIR__ . '/' . $file, FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, $file);

// 开始打包
$phar->startBuffering();

// 将后缀名相关的文件打包
foreach ($exts as $ext) {
    $phar->buildFromDirectory($dir, '/\.' . $ext . '$/');
}
// 把build.php本身摘除
$phar->delete('build.php');

//压缩包
$phar->compressFiles(Phar::GZ);

// 设置入口并设置自动运行包
$phar->setStub("#!/usr/bin/env php \n".$phar->createDefaultStub('index.php'));

$phar->stopBuffering();

//将phar包改名，去掉phar扩展名
rename('./ls.phar', './ls');

//授予phar包可执行权限
chmod('./ls', 0755);

// 打包完成
echo "Finished\n";
