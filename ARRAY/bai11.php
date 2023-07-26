<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Từ điển</title>
</head>
<body> 
    <form action="bai11.php" method="post">
        Dictionary: <input type="text" name="word"><br>
        <button type="submit"> Submit</button>

    </form>
    
</body>
</html>
<?php
 if($_SERVER ["REQUEST_METHOD"] === "POST"){
$word = $_POST["word"];
 
//Viết 1 chương trình từ điển đơn giản. Người dùng nhập vào 1 từ tiếng anh và chương trình in ra nghĩa tiếng việt của từ đó
$dictionary = array(
    "apple" => "quả táo",
    "banana" => "quả chuối",
    "car" => "xe hơi",
    "dog" => "con chó",
   
);




if (isset($dictionary[$word])) {
   
    echo "Nghĩa của từ '{$word}' là: " . $dictionary[$word];
} else {
    
    echo "Không tìm thấy nghĩa của từ '{$word}' trong từ điển.";
}

 }
?>