<?php
	$n=20;
	for($i=1;$i<=$n;$i++){
		for($k=1;$k<=$n-$i;$k++){
			echo '&nbsp;';
		}
		for($j=1;$j<=2*$i-1;$j++){
			echo '*';
		}
		echo '<br>';
	}
	//4=($fish/2-3)/3-1
	//$fish=((4+1)*3+3)*2
	for($i=0,$n=1;$i<9;$i++){
		$n=($n+1)*2;
	}
	echo '<br>n='.$n;
?>