<?php
	function jisuan($n1,$n2,$oper){
		$res=0;
		switch($oper){
			case '+':
				$res=$n1+$n2;
				break;
			case '-':
				$res=$n1-$n2;
				break;
			case '*':
				$res=$n1*$n2;
				break;
			case '/':
				$res=$n1/$n2;
				break;
			default:
				echo '运算符号有误';
		}
		return $res;
	}
	
	echo jisuan(1,2,'+');
?>