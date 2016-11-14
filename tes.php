<?php  
	
	// angka yang diinput	
	$number = 5;
	$odd = 0;
	$even = 0;
	$val = 0;
	$str = "";
	
	// loop sebanyak number	
	for ($i = 0; $i < $number; $i ++) {
		for ($j = 1; $j <= $number; $j++) {
			if ($j % 2 == 0) {
				$odd = $odd + $j;
			} else {
				$even = $even + $j;
			}
		}
	}