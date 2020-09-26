<?php

$array=["Conditionals","David-19","Zorro"];

// implode : array ke string
// explode : string ke array

$a=implode("\n",$array);

echo $a;

echo PHP_EOL;

$b=explode("\n",$a);

print_r($b);