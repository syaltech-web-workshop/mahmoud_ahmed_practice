<?php

$array = [1, 2, 3, 4, 5, 6, 7];

//foreach ($array as $item) {
//    if($item === 2) continue;
//
//    if($item === 4) return;
//
//    print_r($item."\n");
//
//}

foreach ($array as $key => $value){
    echo gettype($key), "\n";
}