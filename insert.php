<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html";charset="UTF-8" />
<link rel ="stylesheet" type="text/css" href="styleukekan.css">
<title>完了</title>
</head>
<body>
<h1>完了しました</h1>
<p>ご利用ありがとうございます。</p>

<?php

mb_internal_encoding("utf8");
$pdo= new PDO("mysql:dbname=lesson01; host=localhost;","root","404again");


$pdo -> exec("insert into uketuke(username,seibetu,nenn,tuki,day,bikou,deleteflg)values('".$_POST['username']."','".$_POST['seibetu']."','".$_POST['nenn']."','".$_POST['tuki']."','".$_POST['day']."','".$_POST['bikou']."',0);");
header("Location:http://localhost/uketuke/index.html");
?>
</body>
</html>

