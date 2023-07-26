<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Đảo ngược</title>
</head>
<body>
<body>
    <form action="bai3.php" method="post">
        chuoi: <input type="text" name="chuoi"><br>
        <button type="submit">Submit</button>
    </form>
</body>
    
</body>
</html>
<?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $chuoi = $_POST["chuoi"];

    echo "Chuoi ban đầu là:" . $chuoi. "<br>";
    $daoNguoc = strrev($chuoi);

    echo "Chuỗi đảo ngược: " . $daoNguoc;
  }
?>