<?php


function my_array_keys($array, $search_value = null, $strict = false)
{
    $keys = null;
    foreach ($array as $key => $value) {
        if(isset($search_value) && !$strict && $search_value == $value){
            echo "first case\n";
            $keys[] = $key;
        } elseif (isset($search_value) && $strict && $search_value === $value){
            echo "second case\n";
            $keys[] = $key;
        } elseif (!isset($search_value)){
            echo "third case\n";
            $keys[] = $key;
        }
    }
    if(!$keys) return [];
    return $keys;
}

//$fruits = ["mango" => "yellow", "orange" => "orange", "strawberry" => "red"];

//$array = array("blue", "red", "green", "blue", "blue");

//$array = [1, "1", 2, 1, 3];

//$array = ["color" => ["blue", "red", "green"],
//    "size"  => ["small", "medium", "large"]];

$array = ["0", "0", 1, 3];

print_r(my_array_keys($array, true));