<?php

require "lib/category.php";
if(count($_POST) > 0){
    save($_POST['category']);
    header("LOCATION:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

</head>
<body>
    <form action="add.php" method="post">
        <input type="text" name="category">
        <input type="submit" value="save">
    </form>
</body>
</html>