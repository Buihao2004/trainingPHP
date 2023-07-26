<?php
$spider = [
    ["tom",96,5],
    ["hoa",98,15],
    ["ho",93,25],

];
for($i = 0; $i <count($spider); $i++){
    echo "Dòng $i: " ;
for($j = 0; $j <count($spider[$i]);$j++){
    echo "cột $j:" . $spider[$i][$j]."";
}
echo "<br>";
}
?>