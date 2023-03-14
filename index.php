<?php

require "lib/category.php";

if(count($_POST) > 0){
    $data = search($_POST['search']);
}else{
    $data = get();
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
    <div>
        <h1>
            <a href="add.php">add new category</a>
        </h1>

        <form action="index.php" method="post">
            <input type="text" name="search">
            <input type="submit" value="search"> 
        </form>
    </div>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>delete</th>
            <th>update</th>
        </tr>
        <?php foreach($data as $category): ?>
        <tr>
            <td> <?= $category['id'] ?> </td>
            <td> <?= $category['name'] ?> </td>
            <td><a href="delete.php?id=<?= $category['id'] ?>">delete</a></td>
            <td><a href="update.php?id=<?= $category['id'] ?>">update</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
