<?php
$admin=$_GET["admin"];
$num=$_GET["num"];
$time=$_GET["time"];
$pass=$_GET["pass"];
require 'test_test.php';
if(file_exists("userss/".$admin)&&$admin!=""){
if($pass==file_get_contents("userss/".$admin."/admin/passprotect556")){
if(file_get_contents("userss/".$admin."/admin/viptime")>time()){
if($num>=1){
if($num<=50){
if(strpos($time,"hous") !==false||strpos($time,"das") !==false||strpos($time,"monts") !==false||strpos($time,"yeas") !==false||strpos($time,"second") !==false){
    $timesss=preg_replace("/\\d+/",'',$time);
    if(strlen($timesss)>=3&&strlen($timesss)<=6){

function getfilenum($file) {
global $dirn;
global $filen;
$file="./userss/".$_GET["admin"]."/kalman/";
$dir = opendir($file);
while($filename = readdir($dir)) {
if($filename!="." && $filename !="..") {
$filename = $file."/".$filename;
if(is_file($filename)) {
$filen++;
}
}
}
}
getfilenum("./code");

$maxkalmannum=500;
if($admin=='xxx172839'){
$maxkalmannum=3000;
}
if($admin=='2723843142'){
$maxkalmannum=10000;
}

if($filen<$maxkalmannum){
//全部通过
echo "创建成功:<br>";
for($nums=0;$nums<$num;$nums++){
if($filen<$maxkalmannum){
$filen=$filen+1;
$kalman=rand(0,10000);
$kalman=md5($kalman);
$kalman=substr($kalman,0,16);
$kalman=strtoupper($kalman);
$kalman=$kalman.rand(1000,9999);
file_put_contents("userss/".$admin."/kalman/".$kalman,$time);
echo $kalman."<br>";
}
}
}else{echo "卡密数达到上限";}
}else{echo '卡密时间错误';}
}else{echo "卡密时间错误";}
}else{echo "一次最多创建50张卡密";}
}else{echo "最少创建一张卡密";}
}else{echo "后台账号过期，无法添加";}
}else{echo "后台密码错误";}
}else{echo "后台账号不存在";}
?>