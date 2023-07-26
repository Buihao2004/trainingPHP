<?php

//Viết chương trình nhập vào 1 chuỗi là kiểm tra xem chuỗi đó có phải là 1 palindrome hay ko

$input = "1881";



function Palindrome($str) {
  
   
    $reverseStr = strrev($str);

    
    if ($str === $reverseStr) {
        return true;
    } else {
        return false;
    }
}
if (Palindrome($input)) {
    echo "Chuỗi là palindrome";
} else {
    echo "Chuỗi không là palindrome";
}

?>