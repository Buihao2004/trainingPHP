<?php
//Viết chương trình tạo 1 mảng số nguyên bất kỳ và tìm in ra số lớn nhất và nhỏ nhất trong mảng
$size = 10;
$arr = [];

for($i = 0; $i < $size; $i++)
{
    $arr[] = rand(1, 100);
     $max = max($arr);
}
    $min = min($arr);
    echo "giá trị lớn nhất trong mảng là: " . $max ;
    echo "<br> giá trị nhỏ nhất trong mảng là:" . $min;

?>