#! /usr/bin/env php
<?php 

$input = $argv[1];

$alphacount = 0;

for( $i = 0; $i < strlen($input); $i++ ){
    $char = $input[$i];
    if(ctype_alpha($char)){
        $alphacount++;
    }
}

echo $alphacount;