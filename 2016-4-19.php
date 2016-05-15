<?php
/*
	$a=23;
	$b=90;
	if($a>$b){echo '$a>$b';}
	else if($a<$b){echo '$a<$b';}
	else{ echo '$a=$b';}

	$a=90;$b=80;
	$c=$a>$b?12:900;
	echo $c;
*/
	$myChar='a';
	switch($myChar){
		default:
			echo '没有匹配的日期';
		case 'a': 
			echo '今天星期一，猴子穿新衣';
			break;
		case 'b':
			echo '今天星期二，猴子当小二';
			break;
		case 'c':
			echo '今天星期三，猴子爬雪山';
			break;
		

	}
?>