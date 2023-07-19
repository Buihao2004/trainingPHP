
 <?php

$num =11;
$ones = array("zero" ,"one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen");
    $tens = array("twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety");
   

    if($num <20){
        echo $ones[$num];
    }else {
     
    $hundreds = floor($num/100);
    $tens_remainder = $num % 100;
    $tens_remainder = floor($tens_remainder/10);
    $ones_remainder = $num % 10;
  
    
    if ($hundreds > 0){
        echo $ones[$hundreds - 1] . " hundred";
    }
    
    if ($tens_remainder > 1){
        echo " " . $tens[$tens_remainder - 2];
    }
    
    if ($ones_remainder > 0){
        echo " " . $ones[$ones_remainder - 1];
    }
}
?>


 

  