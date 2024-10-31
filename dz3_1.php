<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Pictures</title>
    <style>
        img {
            width: 250px;
            height: 180px;
            margin: 5px;
        }
    </style>
</head>
<body>

<?php
$path='img/';
$images=glob($path.'*.jpg');
foreach ($images as $image){
    echo "<img src='$image' alt='pic'>";
}   

?>

</body>
</html>