<?php

// function multiArrayToObject($array) {
//     $object = arrayToObject($array);
//     $multiArray = [];
//     foreach ($object as $obj) {
//         $multiArray[] = $obj;
//     }
//     return $multiArray;
// }
function arrayToObject($array) {
    if (!is_array($array)) {
        return $array;
    }

    $object = new \stdClass();
    if (is_array($array) && count($array) > 0) {
        foreach ($array as $name=>$value) {
            $name = strtolower(trim($name));
            if (!empty($name)) {
                $object->$name = arrayToObject($value);
            }
        }
        return $object;
    }
    else {
        return FALSE;
    }
}

function multiArrayToObject($array) {
    $result = [];

    foreach ($array as $item) {
        $obj = new stdClass(); // Creating a new generic object

        foreach ($item as $key => $value) {
            if (is_array($value)) {
                // If the value is an array, recursively convert it to an object
                $obj->$key = multiArrayToObject($value);
            } else {
                // Otherwise, assign the value to the object property
                $obj->{$key} = $value;
            }
        }

        $result[] = $obj;
    }

    return $result;
}

?>
