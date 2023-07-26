<?php
//Viết chương trình tạo 1 mảng số nguyên bất kỳ và tìm in ra số lớn nhất và nhỏ nhất trong mảng

$arr = [1,2,5,6,78,77,399,44444];
$max = $arr[0];
$min = $arr[0];
for($i = 0; $i < count($arr); $i++){
    if( $arr[$i] > $max) {
        $max = $arr[$i];

    }elseif($arr[$i] < $min){
$min = $arr[$i];
    }
}
echo "giá trị lớn nhất trong mảng là: " . $max ;
echo "<br> giá trị nhỏ nhất trong mảng là:" . $min;
?>