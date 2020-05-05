<?php
header("Content-Type: text/html;charset=utf-8");
$username = $_POST['userame'];//获取username的值  
$password = $_POST['password'];//获取password的值
if($username==123&&$password==456)
	$status=1;//登录成功
else
    $status=0;//登录失败
echo json_encode($status);//将返回结果转为json格式
?>