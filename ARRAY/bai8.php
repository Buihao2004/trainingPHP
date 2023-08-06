
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Đếm chuỗi</title>
</head>
<body>
<body>
    <form action="bai8.php" method="post">
        String: <input type="text" name="string"><br>
        <button type="submit">Submit</button>
    </form>
</body>
    
</body>
</html>

<?php
//Viết chương trình nhập vào 1 string bất kỳ 
//và in ra chuỗi gồm ký tự và số lần xuất hiện của ký tự đó trong chuỗi
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $string = $_POST["string"];

    $result = [];
    for ($i = 0; $i < strlen($string); $i++) {
     $char = $string[$i];
    
         if (isset($result[$char])) {
    
            $result[$char]++;
         } else {
    
             $result[$char] = 1;
          }
}
$output = "";

foreach ($result as $char => $count) {
    $output .= $char . $count; 
}

    echo "Chuỗi ký tự và số lần xuất hiện: " . $output;
 }
?>
