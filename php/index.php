<?php
include_once("./vendor/autoload.php");

$myfile = fopen("1.md", "r") or die("Unable to open file!");
$text = fread($myfile,filesize("1.md"));
fclose($myfile);

$Parsedown = new Parsedown();

echo $Parsedown->text($text); # prints: <p>Hello <em>Parsedown</em>!</p>


// you can also parse inline markdown only
//echo $Parsedown->line('Hello _Parsedown_!'); # prints: Hello <em>Parsedown</em>!

