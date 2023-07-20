<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kien thức HTML Bài 3</title>
</head>
<body>

    <form action=" Welcom.php" method="post">
        <label for="name"> Tên đăng nhập:</label>
        <input  id = "name" type="text" name="name" ><br> 
        
        <label > Ngày sinh:</label>
        <input  type="datetime" name="Date"><br> 
       
        <label > Số điện thoại:</label>
        <input   type="text" name="phone" ><br> 
       
        <label > Email:</label>
        <input  type="text"  name="Email"><br> 
       
        <label > Giới tính: </label> 
        <label >Nam</label>
        <input type="radio" value="1" name="gender">
        <label>Nữ</label>
        <input type="radio" value="2" name="gender">
        <label>Khác</label>
        <input type="radio" value="3" name="gender"><br>
        
        <label > Mô tả về bản thân:</label>
        <input type="textarea" name="gioithieu"><br> 
        
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $Date = $_POST["Date"];
        $phone = $_POST["phone"];
        $Email = $_POST["Email"];
        $gender = $_POST["gender"];
        $gioithieu = $_POST["gioithieu"];

        echo "Họ và tên: " . $name . "<br>";
        echo "Ngày sinh: " . $Date . "<br>"; 
        echo "Số điện thoại: " . $phone . "<br>";
        echo "Email: " . $Email . "<br>";
        echo "Giới tính: ". $gender . "<br>";
        echo "Thông tin mô tả về bản thân: " . $gioithieu;
    }

?>