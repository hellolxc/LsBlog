<?php
//composer 自动加载
require __DIR__.'/vendor/autoload.php';
require __DIR__.'/Application/Common.php';


$app = require __DIR__.'/Application/Bootstrap.php';
$app->run();






// $myfile = fopen("1.md", "r") or die("Unable to open file!");
// $text = fread($myfile,filesize("1.md"));
// fclose($myfile);

// $Parsedown = new Parsedown();

// echo $Parsedown->text($text); # prints: <p>Hello <em>Parsedown</em>!</p>


// you can also parse inline markdown only
//echo $Parsedown->line('Hello _Parsedown_!'); # prints: Hello <em>Parsedown</em>!

//@wiki https://stackoverflow.com/questions/11082337/how-to-make-an-executable-phar

