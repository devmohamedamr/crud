<?php

require "lib/category.php";



if(count($_POST) > 0){
    // request post
    print_r($_POST);die;
    update($_POST['category'],$_POST['id']);
    header("location: index.php");
}else{
    // request get
    $id = $_GET['id'];

    $data =  edit($id);
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
    <form action="update.php" method="post">
        <input type="text" value="<?= $data['name'] ?>" name="category">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="submit" value="save">
    </form>
</body>
</html>