<?php
	echo '
		$i = 0;</br>
		$num = 100;</br>
		$sum = 0;</br>
		for($i = 1;$i <= $num;$i++){</br>
		$sum = $sum + $i;</br>
		}</br>
	';
	$i = 0;
	$num = 100;
	$sum = 0;
	for($i = 1;$i <= $num;$i++){
		$sum = $sum + $i;
	}
	echo "顺序累加法：".$sum;
	echo "</br>";


	// $sum = 1+2+3+4+..+100
	// $sum = 100+99+98+97+..+1
	echo '$sum = 1+2+3+4+..+100
		  $sum = 100+99+98+97+..+1
		  $sum + $sum = 101*100
		  $sum = 101*50
		  $i;</br>
		  $n = 100;</br>
	      $sum = 0;</br>
	      $sum = (1+$n)*($n/2);</br>
	';
	$i;
	$n = 100;
	$sum = 0;
	$sum = (1+$n)*($n/2);
	echo "等差数列：".$sum;
	echo "</br>";

