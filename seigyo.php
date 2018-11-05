<?php

$pdo= new PDO("mysql:dbname=lesson01; host=localhost;","root","404again");

$stmt= $pdo -> query("select * from kanrisya where user ='".$_POST['user']."';");

foreach($stmt as $row){
if($row['user'] === $_POST['user']){
if($row['password'] === $_POST['pass']){
header("Location:http://localhost/uketuke/kanrisyapage.php");
}
}

if($row['user'] !== $_POST['user'] || $row['password'] !== $_POST['pass']){
header("Location:http://localhost/uketuke/kanrisya.html");
}
}
?>