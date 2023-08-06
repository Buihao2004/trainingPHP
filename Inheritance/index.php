<?php

include_once'Circle.php';
$circle = new Circle('hao', 6);
echo '-----CIRCLE-----<br>';
echo  $circle->showName() . "<br>";
echo 'AREA = ' . $circle->calculateArea() . '<br>';
echo 'PERIMETER = ' .$circle->calculatePerimeter() . '<br>';

include_once'Cylinder.php';
$cylinder = new Cylinder('hao',5 ,10);
echo ' ------CYLINDER------<br>';
echo  $cylinder->showName() . '<br>';
echo 'AREA = ' . $cylinder->calculateArea() . '<br>';
echo 'VOLUME = ' . $cylinder->calculateVolume() . '<br>';


include_once'Rectangle.php';
$rectangle = new Rectangle('hao', 5, 7);
echo '------RECTANGLE-----' . '<br>';
echo  $rectangle->showName() . '<br>';
echo 'AREA = ' . $rectangle->calculateArea() . '<br>';
echo 'PERIMETER = ' . $rectangle->calculatePerimeter() . '<br>';

include_once'Rectangular.php';
$rectangular = new Rectangular('hao', 2, 5.4, 3);
echo ' ------RECTANGULAR------<br>';
echo $rectangular->showName() . '<br>';
echo 'AREA = ' . $rectangular->calculateArea() . '<br>';
echo 'VOLUME = ' . $rectangular->calculateVolume() . '<br>';


?>