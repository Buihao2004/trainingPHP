<?php
//Viết chương trình nhập vào 3 số nguyên và kiểm tra xem đây có phải là số đo 3 cạnh của 1 tam giác ko? In ra loại tam giác (xét các điều kiện tam giác đặc biệt)
$_A = -1;
$_B = 4;
$_C = 7;
if ($_A > 0 and $_B > 0 and $_C >0 ){
    if($_A + $_B > $_C && $_B + $_C > $_A && $_A + $_C > $_B){
       if ($_A == $_B && $_A == $_C && $_C == $_B){
            echo" tam giác đều";
         } elseif ($_A ==$_B || $_B ==$_C || $_A == $_C){
            echo " tam giác cân";
         } elseif ($_A*$_A + $_B*$_B == $_C*$_C || $_A*$_A + $_C*$_C == $_B*$_B || $_C*$_C + $_B*$_B == $_A*$_A){
         echo "Tam giac vuông"; 
          }else {
        echo "tam giác thường";
    }   
} else {
    echo "Đây không phải 3 cạnh của tam giác";
}
} else {
     echo " 3 cạnh không thỏa mãn điều kiện";
}



?>
 