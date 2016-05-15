<?php
for($i=0;$i<3;$i++){
	for($j=1;$j<7;$j++){
		if($j==3){
			continue 2;
		}
		echo '$i='.$i.'$j='.$j."<br>";
	}
}
?>
//php中break默认跳出当前循环  后面加数字表示跳出几层循环
//continue默认结束本轮循环，后面加数字表示跳出几层循环？？？？
<?php

echo"\n";
echo"\n";

    for ( $i = 0; $i < 5; $i++ ) {

        switch ($i)
        {

            case 0:
                echo $i . "b";
                continue;
                echo $i . "a";
            case 1:    
                echo $i . "b";
                continue 2;
                echo $i . "a";
            case 2:    
                echo $i . "b";
                break;
                echo $i . "a";
            case 3:
                echo $i . "b";
                break 2;
                echo $i . "a";
            case 4:
                echo $i;
            
        }

        echo 9;

    }

echo"\n";
echo"\n";

?> 