<?php

function my_array_count_values($array)
{
    $new_array =[];
    $element_index = 0;
    for ($i = 1; $i < count($array); $i++){
        if($array[$element_index] == $array[$i]){
            $replaced_element = $array[$element_index + 1];
            $array[$element_index + 1] = $array[$i];
            $array[$i] = $replaced_element;
            $element_index++;
        }
        if($i == count($array) - 1){
            $element_index++;
            $i = $element_index;
        }
    }
    $element_index = 0;
    $counter = 1;
    print_r($array);
    for($i = 1; $i < count($array); $i++){
        if(!is_int($array[$element_index]) && !is_string($array[$element_index])){
            trigger_error("my_array_count_values(): Can only count STRING and INTEGER values!",
                E_USER_WARNING);
            $element_index = $i;
            continue;
        }
        if($array[$element_index] == $array[$i]){
            $counter++;
        }else{
            $new_array[$array[$element_index]] = $counter;
            $element_index = $i;
            $counter = 1;
        }
        if($i === count($array) - 1) $new_array[$array[$element_index]] = $counter;
    }
    return $new_array;
}


//$array = [1, 3, 1, 2, 1, 3, 3, 2];

//$array = [1, 3, 1, 4, 3, 1];

//$array = [1.1, "hello", 1.1, "world", "hello"];

$array = [0.0, "0", 1, 0, "0", 1];


print_r(my_array_count_values($array));






