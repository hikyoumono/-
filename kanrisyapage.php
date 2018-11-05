<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html";charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="kanrisyapagestyle.css"/>
<title>タイトル</title>
</head>
<body>
<div class="main">
<?php
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","404again");
$stmt=$pdo->query("select * from uketuke where deleteflg<>1 order by id");

?>

<h1>予約の確認状況</h1>
<p>こちらから全体の受付の確認を見ることができます。<br>削除することも可能です。</p>
<form action="deletesql.php" method="post">

<?php

foreach($stmt as $row){
echo '<div class="tag">';
echo "<input type='checkbox' name='check' value=".$row['id'].">";
echo $row['username'];


echo "<input type='hidden' name='number' value=".$row['id'].">";
echo "<input type='submit' class='button1' name='action1' value='詳細'>";

echo '</div>';
}

?>
<input type="submit" class="button2" name="action2" value="削除">
</form>
</div>
</body>
</html>