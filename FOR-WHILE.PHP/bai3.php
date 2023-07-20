<?php


// tính tổng của 20 số đầu tiên trong dãy Fibonacci:



$n1 = 0;
$n2 = 1;
$sum = 0;

for ($i = 0; $i < 20; $i++)
{
    $sum = $sum + $n1;
    $n3 = $n1 + $n2;
    $n1 = $n2;
    $n2 = $n3;
}

echo "Tong cua 20 so dau tien trong day Fibonacci la: " . $sum;

?>

 
