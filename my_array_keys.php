<?php


function my_array_keys($array, $search_value = null, $strict = false)
{
    $keys = [];
    foreach ($array as $key => $value) {
        if(!$strict && $search_value == $value){
            echo "first case\n";
            $keys[] = $key;
        } elseif ($strict && $search_value === $value){
            echo "second case\n";
            $keys[] = $key;
        } elseif (!isset($search_value) && func_num_args() < 3){
            echo "third case\n";
            $keys[] = $key;
        }
    }
    return $keys;
}

//$fruits = ["mango" => "yellow", "orange" => "orange", "strawberry" => "red"];

//$array = array("blue", "red", "green", "blue", "blue");

//$array = [1, "1", 2, 1, 3];

//$array = ["color" => ["blue", "red", "green"],
//    "size"  => ["small", "medium", "large"]];

//$array = ["0", "0", 1, 3];

$array = [
    'one' => null,
    'two' => 0,
    'hamada' => "lang",
    'another_one' => 0
];

print_r(my_array_keys($array, null, false));