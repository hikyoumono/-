<?php
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","404again");
$stmt=$pdo->exec("insert into bigdata(sintyou,taiju,seibetu,kikite,tosi,netu,taityou,kibun)values(".$_POST['sintyou'].",".$_POST['taiju'].",".$_POST['seibetu'].",".$_POST['kikite'].",".$_POST['tosi'].",".$_POST['netu'].",".$_POST['taityou'].",".$_POST['kibun'].");");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html";charset="UTF-8" />
</head>
<body>
<P>診断結果</p>
<?php
$BMI =$_POST['taiju'] / ($_POST['sintyou'] * $_POST['sintyou']);
if($BMI<=15){
echo "痩せすぎではないでしょうか。三食きちっと食べるようにしましょう。";
}else if($BMI>15 && $BMI<25){
echo "比較的健康的な体系です。";
}else{
echo "肥満傾向です。食べすぎには注意してください。";
}
?>


<?php
$flg=true;


if($_POST['taityou']==2 && $_POST['taityou']==3){
$stmt =$pdo->query("select * from kekka where taityou=2 and taityou=3");
$flg=false;
}else if($_POST['taityou']==2 || $_POST['taityou']==3 || $_POST['taityou']==4){
$stmt =$pdo->query("select * from kekka where taityou=2");
$flg=false;
}

if($_POST['taityou']==5 ){
if($_POST['sake']==1){
$stmt =$pdo->query("select * from kekka where taityou=5 and sake=1;");
$flg=false;
}
else if($_POST['netu']==2){
$stmt =$pdo->query("select * from kekka where taityou=5 and netu=2");
$flg=false;
}
else if($_POST['taityou']==2 || $_POST['taityou']==3 || $_POST['taityou']==4){
$stmt =$pdo->query("select * from kekka where taityou=5 taityou=2");
$flg=false;
}
}


if($_POST['taityou']==6){
if($_POST['taityou']==7){
$stmt =$pdo->query("select * from kekka where taityou=6 taityou=7;");
$flg=false;
}else if($_POST['netu']==2){
$stmt =$pdo->query("select * from kekka where taityou=6 netu=2");
$flg=false;
}


}

if($_POST['taityou']==7){
if($_POST['kibun']==2){
$stmt=$pdo->query("select * from kekka where taityou=7 kibun=2 netu=1");
$flg=false;
}
else if($_POST['taityou'] !=1 || $_POST['netu'] ==1){
$stmt=$pdo->query("select * from kekka where taityou=7 ");
$flg=false;
}
}
if($_POST['netu']==2){
$stmt=$pdo->query("select * from kekka where netu=2");
}



if($flg==false){
echo "<br><br>健康です。<br>病気の可能性はありません。";
}
?>

</body>
</html>