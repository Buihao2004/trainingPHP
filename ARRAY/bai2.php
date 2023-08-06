<?php
//Viết chương trình tạo 1 mảng số nguyên bất kỳ và in ra mảng đó sau khi sắp xếp các giá trị từ nhỏ đến lớn 
 

$array = []; 
  
$size = 10;
  

for ($i = 0; $i < $size; $i++)
{
    $array[] = rand(1, 100);
}
  
sort($array);

echo "Mảng sau khi xếp từ nhỏ đến lớn: " ;
foreach ($array as $value) {
    echo $value . " ";
}

?>