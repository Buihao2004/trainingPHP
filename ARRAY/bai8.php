<?php
// Nhập chuỗi từ người dùng
$string = "Hello";

// Khởi tạo mảng để lưu ký tự và số lượng
$count = array();

// Duyệt qua từng ký tự trong chuỗi
for ($i = 0; $i < strlen($string); $i++) {
    $char = $string[$i];
    
    // Kiểm tra xem ký tự đã tồn tại trong mảng hay chưa
    if (isset($count[$char])) {
        // Nếu đã tồn tại, tăng số lượng lên 1
        $count[$char]++;
    } else {
        // Nếu chưa tồn tại, gán số lượng bằng 1
        $count[$char] = 1;
    }
}

// Khởi tạo chuỗi kết quả
$output = "";

// Duyệt qua mảng ký tự và số lượng để tạo chuỗi kết quả
foreach ($count as $char => $charCount) {
    $output .= $char . $charCount;
}

// In ra chuỗi kết quả
echo "Chuỗi ký tự và số lần xuất hiện: " . $output;
?>
