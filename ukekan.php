<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>受付画面</title>
<link rel ="stylesheet" type="text/css" href="styleukekan.css">
</head>
<body>
<div class="main">
<br>
<h1>予約確認画面</h1>
<p>内容はこちらでよろしいでしょうか</p>

<p><?php echo $_POST['username']; ?></p>

<?php
if($_POST['seibetu'] ==='0'){
echo "<p>性別：男</p>";
}

if($_POST['seibetu'] ==='1'){
echo "<p>性別：女</p>";
}
?>

<p><?php echo $_POST['nenn']; ?>
<p><?php echo $_POST['tuki']; ?>
<p><?php echo $_POST['day']; ?>
<p><?php echo $_POST['bikou']; ?>


</div>
<form method="post" action="insert.php">
<input type="hidden" value="<?php echo $_POST['username']; ?>" name="username">
<input type="hidden" value="<?php echo $_POST['seibetu']; ?>" name="seibetu">
<input type="hidden" value="<?php echo $_POST['nenn']; ?>" name="nenn">
<input type="hidden" value="<?php echo $_POST['tuki']; ?>" name="tuki">
<input type="hidden" value="<?php echo $_POST['day']; ?>" name="day">
<input type="hidden" value="<?php echo $_POST['bikou']; ?>" name="bikou">

<?php
if($_POST['username'] !== '' && $_POST['bikou'] !== ''){
echo '<input type="submit" class="sub" value="登録" size=150px>';
}else{
echo "<div class='error'>入力できていない箇所があります</div>";
}
?>
</form>



</form>
</body>
</html>