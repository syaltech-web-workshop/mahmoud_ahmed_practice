<?php


function my_array_column($input, $column_key, $index_key = null)
{
//    if(!is_int($column_key) && !is_string($column_key) && !is_null($column_key)){ // null , string , integer
//        trigger_error("my_array_column accepts integer or string", E_USER_WARNING);
//        return;
//    }
    $new_array = [];
    $new_key = null;
    foreach ($input as $value) {
        foreach ($value as $key => $sub_value) {
            if($index_key !== $key){
                if($column_key == $key){
                    $new_array[] = $sub_value;
                }
            }else{
                if($index_key == $key) $new_key = $sub_value;
                if($column_key == $key ){
                    $new_array[$new_key] = $sub_value;
                }elseif ($column_key === null){
                    $new_array[$new_key] = $value;
                }
            }
        }
    }
    return $new_array;

}

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

print_r(my_array_column($records, null));