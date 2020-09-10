<?php
/**
 * Created by PhpStorm.
 * User: qishou
 * Date: 20-9-8
 * Time: 上午9:12
 */


	//冒泡排序
	header("content-type:text/html;charset=utf-8");
	$arr = array(3,5,8,4,9,6,1,7,2);
	echo implode(" ", $arr);
	echo "</br>";
	echo '变量类型为：'.gettype($arr);
	echo "</br>";
	print_r($arr);
	echo "</br>";
	function BubbleSort($arr){
		$length = sizeof($arr);
		if($length <= 1){
			return $arr;
		}
		for($i = 0; $i < $length;$i++){
			for($j = $length-1;$j > $i; $j--){
				if($arr[$j] < $arr[$j-1]){
					$tmp = $arr[$j];
					$arr[$j] = $arr[$j-1];
					$arr[$j-1] = $tmp;
				}
			}
		}
		return $arr;
	}
	echo '冒泡排序结果:</br>';	
	echo implode(" ", BubbleSort($arr));




