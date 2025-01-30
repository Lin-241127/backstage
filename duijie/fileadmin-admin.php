<?php
if($_GET['pass1'] != 'chumo556' || $_GET['pass2'] != 'qianmo556' || $_GET['pass3'] != 'chuqian556' || $_GET['pass4'] != 'chuqian520' || $_GET['pass5'] != 'cq556556')exit;
$admin = $_GET['admin'];
$num = $_GET['num'];
require 'test_test.php';
if(!is_dir('userss/'.$admin))die('后台账号不存在');
if(!is_numeric($num))die('数量错误');

$money = file_get_contents('userss/'.$admin.'/admin/data/filenum');
if($money > 0){
    $newmoney = $money + $num;
}else{
    $newmoney = $num;
}
file_put_contents('userss/'.$admin.'/admin/data/filenum',$newmoney);
die('操作成功');