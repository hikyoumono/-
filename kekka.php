<?php
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","404again");
$stmt=$pdo->exec("insert into bigdata(sintyou,taiju,seibetu,kikite,tosi,netu,taityou,kibun)values(".$_POST['sintyou'].",".$_POST['taiju'].",".$_POST['seibetu'].",".$_POST['kikite'].",".$_POST['tosi'].",".$_POST['netu'].",".$_POST['taityou'].",".$_POST['kibun'].");");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<
</head>
<body>
<P>�f�f����</p>
<?php
int BMI =$_POST['taiju'] / $_POST['sintyou'] * $_POST['sintyou'];
if(BMI<=15){
echo "���������ł͂Ȃ��ł��傤���B�O�H�������ƐH�ׂ�悤�ɂ��܂��傤�B";
}else if(BMI>15 && BMI<25){

}else{
echo "�얞�X���ł��B�H�ׂ����ɂ͒��ӂ��Ă��������B";
}
?>


<?php
boolean flg=false;


if($_POST['taityou']==2 && $_POST['taityou']==3){
$stmt =$pdo->query(select * from kekka where taityou=2 and taityou=3;");
}else if($_POST['taityou']==2 || $_POST['taityou]==3 || $_POST['taityou']==4){
$stmt =$pdo->query(select * from kekka where taityou=2);
}

if($_POST['taityou']==5 ){
if($_POST['sake']==1){
$stmt =$pdo->query("select * from kekka where taityou=5 and sake=1;");
}
else if($_POST['netu']==2){
$stmt =$pdo->query("select * from kekka where taityou=5 and netu=2");
}
else if($_POST['taityou']==2 || $_POST['taityou']==3 || $_POST['taityou']==4 && $_POST['netu']==2){
$stmt =$pdo->query("select * from kekka where taityou=5 taityou=2 netu=2");
}
else if($_POST['taityou']==2 || $_POST['taityou']==3 || $_POST['taityou']==4){
$stmt =$pdo->query("select * from kekka where taityou=5 taityou=2");
}
}


if($_POST['taityou']==6){
if($_POST['taityou']==7){
$stmt =$pdo->query("select * from kekka where taityou=6 taityou=7;");
}else if($_POST['netu']==2){
$stmt =$pdo->query("select * from kekka where taityou=6 netu=2");
}
}

if($_POST['taityou']==7){
if($_POST['kibun']==2){
$stmt=$pdo->query("select * from kekka where taityou=7 kibun=2" $_POST['netu'] ==1);
}
else if($_POST['taityou'] !=1 || $_POST['netu'] ==1){
$stmt=$pdo->query("select * from kekka where taityou=7 ");
}
flg==true;
}
if($_POST['netu']==2){
$stmt=$pdo->query("select * from kekka where netu=2");
}

if($_POST['kibun']==1 || $_POST['taityou']==1){
flg==true;
}

if(flg==true){
echo "���N�ł��B<br>�a�C�̉\���͂���܂���B";
}

</body>
</html>