<?php

    $key = $_POST['key'];

    foreach (glob("*.txt") as $filename) {}
    $arr = file($filename);

    $cut = (
    	array_reduce($arr, 
    		function($carret, $item) {
                return array_merge($carret, preg_split('/\s+/', $item));
        }, []
        )
        );
    sort($cut);

    function binarySearch(array $array, $item, int $start = 0, int $end = null):int {
    	if ($end === null) {
    		$end = count($array) - 1;
    	}

        if ($start > $end) echo("not found\n");

        
    	$halfIndex = (int)($start + $end) / 2;

    	if ($array[$halfIndex] !== $item) {
              if ($array[$halfIndex] < $item) $start = $halfIndex + 1; 
              else $end = $halfIndex - 1;  
              return binarySearch($array, $item, $start, $end);     
    	}

    	return $halfIndex;
    }

    echo "<center>position is ".binarySearch($cut, $key).": <h3>".$key."</h3>";
?>