<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phương trình bậc 2</title>
</head>
<body>
    <form action="demo2.php" method="post">
        A: <input type="number" name="A"> <br>
        B: <input type="number" name="B"> <br>
        C: <input type="number" name="C"> <br>
        <button type="submit"> Submit</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
  $A = $_POST["A"];
  $B = $_POST["B"];
  $C = $_POST["C"];

  include_once('bai2.php');

  $equation = new QuadracticEquation($A, $B, $C);
  
  $delta = $equation->getDelta();
  echo "Delta = " . $delta . '<br>';
  
  if( $delta >= 0) {
    echo 'Phương trình có nghiệm <br>';
    echo 'Nghiệm x1 = '. $equation->getRoot1() . '<br';
    echo 'Nghiệm x2 = '. $equation->getRoot2() . '<br';

  }else {
    echo 'Phương trình vô nghiệm';
  }
   
}

?>