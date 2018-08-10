<?php


function my_array_fill($start_index, $num, $value)
{
    if($num < 0){
        trigger_error("my_array_fill(): Number of elements can't be negative",
            E_USER_WARNING);
        return null;
    }
    if(!$num) return [];
    for ($i = 0; $i < $num; $i++){
        $filled_array[$start_index] = $value;
        if($start_index < 0){
            $start_index = 0;
            continue;
        }
        $start_index++;
    }
    return $filled_array;

}

print_r(my_array_fill(38, -5, "banana"));

