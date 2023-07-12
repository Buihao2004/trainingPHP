<?php 


// Viết chương trình giải phương trình bậc 2
$_nghiemx1;
$_nghiemx2;
$_bienA = 1;
$_bienB = -5;
$_bienC = 6;
$_Delta = ($_bienB * $_bienB) - (4 * $_bienA * $_bienC);

if ($_Delta == 0) {
    echo "Phương trình có nghiệm kép";
    $_nghiemx1 = -$_bienB / (2 * $_bienA);
    echo $_nghiemx1;
} elseif ($_Delta > 0) {
    echo "Phương trình có 2 nghiệm phân biệt";
    $_nghiemx1 = (-$_bienB + sqrt($_Delta)) / (2 * $_bienA);
    $_nghiemx2 = (-$_bienB - sqrt($_Delta)) / (2 * $_bienA);
    echo $_nghiemx1 . ", " . $_nghiemx2;
} else {
    echo "Phương trình vô nghiệm";
}
?>