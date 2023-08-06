<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hình chữ nhật </title>
</head>
<body>
    <form action = "demo1.php" method="post">
    length: <input type="number" name="length"><br>
    width: <input type="number" name="width"><br>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>
<?php 
//một lớp các đối tượng hình chữ nhật
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $length = $_POST["length"];
    $width = $_POST["width"];


    include_once('bai1.php');
     $rect = new Rectangle($length, $width);
     echo "length =" . $rect->length . "<br>";
     echo "width =" . $rect->width . "<br>";
     echo 'calculateArea =' . $rect->calculateArea() . '<br>';
    
     echo 'perimeter =' . $rect->perimeter() . '<br>';
}
?>