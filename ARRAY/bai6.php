<?php
//Viết chương trình tạo 1 mảng số nguyên bất kỳ và in ra mảng đó sau khi sắp xếp các giá trị từ lớn đến nhỏ
$arr = [];
$size = 10;

for($i =0; $i < $size; $i++){

 $arr[] = rand(1, 100);

}
rsort($arr);

echo " Mảng  sắp xếp từ lớn đến nhỏ là: " ;

foreach ($arr as $value) {
echo $value . " ";
}
?>