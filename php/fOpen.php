<?php


$openFile = fopen("../file/Hello.txt","r");

$readFile = fread($openFile,filesize("../file/Hello.txt"));

echo $readFile;

fclose($openFile);