<?php
//Viết chương trình tạo 1 mảng số nguyên bất kỳ và in ra mảng đó sau khi sắp xếp các giá trị từ nhỏ đến lớn 
 

$mang = array(1, 5, 9, 2, 4, 88); 
  
$count = 6; 
  

for ($i = 0; $i < ($count - 1); $i++)
{
    for ($j = $i + 1; $j < $count; $j++) 
    {
        if ($mang[$i] > $mang[$j]) 
        {
          
            $tmp = $mang[$j];
            $mang[$j] = $mang[$i];
            $mang[$i] = $tmp;
        }
    }
}
  

for ($i = 0; $i < $count; $i++){
    echo $mang[$i] . ' ';
}

?>