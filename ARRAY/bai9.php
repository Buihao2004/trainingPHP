<?php

$array = array(
    array(2, 4, 3),
    array(5, 3, 7),
    array(5, 1, 2)
);

echo "Mảng ban đầu:<br>";
displayArray($array);

$n = 1;

// Quay mảng
for ($i = 1; $i <= $n; $i++) {
    $array = rotateArray($array);
}

echo "Mảng sau khi quay:<br>";
displayArray($array);

//Hàm hiển thị 
function displayArray($array) {
    foreach ($array as $row) {
        foreach ($row as $value) {
            echo "[" . $value . "]";
         
        }
        echo "<br>";
    }
}

//Hàm quay 
function rotateArray($array) {
    $rotatedArray = array();
    $size = count($array);
    for ($i = 0; $i < $size; $i++) {
        $rotatedRow = array();
        for ($j = 0; $j < $size; $j++) {
            $rotatedRow[] = $array[$size - $j - 1][$i];
        }
        $rotatedArray[] = $rotatedRow;
    }
    return $rotatedArray;
}
?>