<?php
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","404again");

if($_POST['action1']){
echo "<h1>詳細</h1>";
$stmt =$pdo->query("select * from uketuke where id =".$_POST['number']);

foreach($stmt as $row){
echo "<h3>名前</h3>";
echo $row['username'];
echo "<br>";

echo "<h3>性別</h3>";
echo "<p>";
if($row['seibetu']==0){
echo "男";
}else{
echo "女";
}
echo "</p>";

echo "<h3>生年月日</h3>"."<p>";
echo $row['nenn']."年".$row['tuki']."月".$row['day']."日</p>";

echo "<h3>内容</h3>"."<p>";
echo $row['bikou'];
echo "</p>";
}

}else if($_POST['action2']){
$res=$pdo->query("update uketuke set deleteflg=1 where id='".$_POST['check']."';");
header("Location:http://localhost/uketuke/kanrisyapage.php");
}

?>