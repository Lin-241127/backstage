<?php
$admin=$_GET["admin"];
$pass=$_GET["pass"];
require 'test_test.php';

if($admin!=""&&$pass!=""){
if(!file_exists("userss/".$admin)){
echo "后台账号不存在";
}else{
if($pass==file_get_contents('userss/'.$admin.'/admin/passprotect556')){
   $path = "onlines";//目标文件
        //定义函数
        function showAll($path){
            //判断是不是目录
            if(is_dir($path)){
            //如果是不是目录
                $handle = opendir($path);
                while (false !== $file = readdir($handle)) {
                    if($file == "." || $file == ".."){
                        continue;
                    }
                    //判断读到的文件名是不是目录,如果不是目录,则开始递归;
                    if(is_file($path.'/'.$file)){  //加上父目录再判断
                        showAll($path.'/'.$file);
                        $chatlist=$file;

	       if(strpos($file,$_GET['admin'].'-')!==false){
	           $chatlist=str_replace($_GET['admin'].'-','',$file);
    		echo '['.$chatlist.']';
}
					
                    //这里是获取账号数据
                    }
                    }
                //关闭目录句柄
                closedir($handle);
            }
          
        }
        //调用函数
        showAll($path);
}else{echo '后台密码错误';}
}
    }else{echo "参数不完整";}
      ?>