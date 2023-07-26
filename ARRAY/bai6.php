<?php
//Viết chương trình tạo 1 mảng số nguyên bất kỳ và in ra mảng đó sau khi sắp xếp các giá trị từ lớn đến nhỏ


$mang = array(1,44,66,8,4,3);

for($i =0; $i < count($mang)-1; $i++){
    for($j = $i + 1; $j <count($mang); $j++ ){
        if ($mang[$i]<$mang[$j]){

            $tpm = $mang[$j];
            $mang[$j] = $mang[$i];
            $mang[$i] = $tpm;

        }
    }

}
for($i = 0; $i < count($mang); $i++){
    echo $mang[$i] .'<br>';
}
?>