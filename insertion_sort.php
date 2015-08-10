<?php

function swap($index1, $index2, &$arr){
	$temp = $arr[$index1];
	$arr[$index1] = $arr[$index2];
	$arr[$index2] = $temp;
}

function insertion_sort($arr){
	$time_strat = microtime(true);
	for($i=0; $i<count($arr)-1; $i++){  // select a part of array for comparing;
		for($j=$i; $j>=0; $j--){	//compare every element in the comparing array from right to left;
			$comparing_element = $j+1;	//set the comparing element 
			if ($arr[$comparing_element]<$arr[$j]){
				swap($comparing_element, $j, $arr); //swaping the two elements;
			}
			else {
				break;			//if the comparing element is equal or greater than the element before it, then end the comparing loop;
			}
		}
	}
	$time_end = microtime(true);
	$time = $time_end - $time_strat;
	echo "<span style = 'color:red; font-weight:bold;'>This insertion sort took: " . $time . " second(s).</span>";
	var_dump($arr);
}

$numbers = array();
for($i=0; $i<100; $i++){
	$numbers[] = rand(1, 10000);
}
echo "<span style = 'font-size:20; font-weight:bold;'>The original array:<br></span>";
var_dump($numbers);
echo "<span style = 'font-size:20; font-weight:bold;'>The sorted array:<br></span>";
insertion_sort($numbers);

?>