<?php
	//接受用户从cal.php提交的数据

	//1、接收num1
	//该方法可以接收用户的post或get请求数据
	$num1=$_REQUEST['num1'];
	//2、接收num2
	$num2=$_REQUEST['num2'];
	//接收运算符
	$oper=$_REQUEST['oper'];
	
	echo 'num1='.$num1.' num2='.$num2.'运算符是：'.$oper;

	$res=0;
	switch($oper){
		case '+':
			$res=$num1+$num2;
			break;
		case '-':
			$res=$num1-$num2;
			break;
		case '*':
			$res=$num1*$num2;
			break;
		case '/':
			$res=$num1/$num2;
			break;
		default:echo '运算符不正常';
	}
	echo '运算结果是：'.$res;
?>
<p><a href='cal.php'>返回上一页面</p>