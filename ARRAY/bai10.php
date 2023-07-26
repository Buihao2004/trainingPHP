<?php
// Nhập chuỗi từ người dùng
$input = "1881";


// kiểm tra palindrome
function Palindrome($str) {
  
    // Đảo ngược chuỗi
    $reverseStr = strrev($str);

    // So sánh chuỗi gốc với chuỗi đảo ngược
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