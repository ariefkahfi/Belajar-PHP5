<?php
$file = fopen("../file/Hello.txt","r");


while (!feof($file)){
    echo fgetss($file) . "<br/>";
}

fclose($file);