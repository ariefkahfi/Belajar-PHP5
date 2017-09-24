<?php

$location = "../file/touchFile.txt";

$file = fopen($location,"a+");


fwrite($file,"Hello World 1\n");
fwrite($file,"Hello World 2\n");