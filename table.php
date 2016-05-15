<?php
	header('Content-Type:application/json');
/**随机字符串生成**/


  function getRandChar($length){
   $str = null;
   $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
   $max = strlen($strPol)-1;

   for($i=0;$i<$length;$i++){
    $str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
   }

   return $str;
  }
 

 //echo $randCharObj = getRandChar(15);

	$arr=[];
	$j=5;
	for ($i=0; $i < $j; $i++) { 
		$arr[]=['uno'=>rand(1000,10000),'uname'=>getRandChar(rand(3,6)),'phone'=>rand(10000000,100000000),'uadd'=>getRandChar(rand(13,16))];
	}
	//var_dump($arr);
	$json=json_encode($arr);
	//echo '<hr>';
	echo $json;

?>
