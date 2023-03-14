<?php

require "lib/category.php";
$message = "";
if(count($_POST) > 0){
    if(strlen($_POST['category']) == 0){
        $message = "this faild is required";
    }else{
        save($_POST['category']);
        header("LOCATION:index.php");
    }
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
    <?php if(strlen($message) > 0): ?>
    <h1 style="color:red"><?= $message ?></h1>
    <?php endif; ?>
    <form action="add.php" method="post">
        <input type="text" name="category">
        <input type="submit" value="save">
    </form>
</body>
</html>