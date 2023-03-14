<?php
function connect(){
   return   mysqli_connect("localhost","root","","giz2");
}
function get()
{
   $query =  mysqli_query(connect(),"SELECT * FROM `category`");
   return mysqli_fetch_all($query,MYSQLI_ASSOC);
}


function save($category)
{
   $query =  mysqli_query(connect(),"INSERT INTO `category` (`name`) VALUES ('$category')");
   return mysqli_affected_rows(connect());
}

function delete($id)
{
   $query =  mysqli_query(connect(),"DELETE FROM `category` WHERE `id` = $id");
   return mysqli_affected_rows(connect());
}

function edit($id)
{
   $query =  mysqli_query(connect(),"SELECT * FROM `category` WHERE `id` = $id");
   return mysqli_fetch_assoc($query);
}

function update($category,$id)
{
   $query =  mysqli_query(connect(),"UPDATE `category` SET `name` = '$category' WHERE `id` = $id");
   return mysqli_affected_rows(connect());
}