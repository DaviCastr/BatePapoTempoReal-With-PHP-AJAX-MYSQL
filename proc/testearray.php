<?php 
$array1 = array();
for ($j=0; $j < 11; $j++) { 
	for ($i=0; $i < 11; $i++) { 
		$array1[$j][$i] =$i;
	}
}

for ($j=0; $j < 11; $j++) { 
	for ($i=0; $i = strlen($array1); $i++) { 
		echo $array1[$j][$i];
		echo "<br />";
	}
}
?>