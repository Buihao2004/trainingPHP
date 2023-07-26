<?php
$size = 3; 
$matrix = [];


for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        $matrix[$i][$j] = rand(1, 10);
    }
}

echo "Ma trận:<br>";

for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        echo $matrix[$i][$j] . "\t";
    }
    echo "<br>";
}


$sumMainDiagonal = 0;
for ($i = 0; $i < $size; $i++) {
    $sumMainDiagonal += $matrix[$i][$i];
}


$sumSubDiagonal = 0;
for ($i = 0; $i < $size; $i++) {
    $sumSubDiagonal += $matrix[$i][$size - 1 - $i];
}

echo "Tổng đường chéo chính: " . $sumMainDiagonal . "<br>";
echo "Tổng đường chéo phụ: " . $sumSubDiagonal . "<br>";
?>
