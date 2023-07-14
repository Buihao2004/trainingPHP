<?php

//Viết chương trình kiểm tra 1 năm có phải năm nhuận hay ko

$nam = 1604;
if($nam > 0){
    if ($nam % 4 == 0 && ($nam % 100 != 0 || $nam % 400 == 0)) {
    echo "Năm này là năm nhuận";
} 
}else {
    echo "Năm này không phải là năm nhuận";

}
?>
