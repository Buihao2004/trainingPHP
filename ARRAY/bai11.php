
<?php

$dictionary = array(
    "apple" => "quả táo",
    "banana" => "quả chuối",
    "car" => "xe hơi",
    "dog" => "con chó",
   
);


$word = "dog";


if (isset($dictionary[$word])) {
   
    echo "Nghĩa của từ '{$word}' là: " . $dictionary[$word];
} else {
    
    echo "Không tìm thấy nghĩa của từ '{$word}' trong từ điển.";
}


?>