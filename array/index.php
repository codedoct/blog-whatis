<?php 

//this script write one php version 5.6

//simple array
	$a = array(
		'a' => 'ayam',
		'b' => 'bebek',
		'c' => 'cacing',
	);

	//doesn't mater if the last array not use ','
	$b = array(
		'a' => 'ayam',
		'b' => 'bebek',
		'c' => 'cacing'
	);

	//show array
	var_dump($a);
	echo "<br>";
	var_dump($b);

	echo "<br><br>";

	//show beauty array
	foreach ($a as $key => $value) {
	    echo "$key: $value <br>";
	}

	echo "<br>";

	//show string array
	// '\' for write parse html on php
	echo "string array \$a => a = ".$a['a'];
	echo "<br>";
	echo "string array \$b => c = ".$b['c'];

	echo "<br><br>";

//sorting array
	$unsort = array(
		'1' => 'ayam',
		'3' => 'cacing',
		'2' => 'bebek',
	);

	//unsort array
	echo "unsort<br>";
	foreach ($unsort as $key => $value) {
		echo "$key: $value <br>";
	}

	echo "<br>";

	//sorting array asc
    function sortArray($a, $b)
	{
	    if ($a == $b) {
	        return 0;
	    }
	    return ($a < $b) ? -1 : 1;
	}
	usort($unsort, "sortArray");
	echo "sorted<br>";
	foreach ($unsort as $key => $value) {
		echo "$key: $value <br>";
	}

	echo "<br>";

	//sorting array desc
	usort($unsort, function($a, $b) 
	{
	    return $b - $a;
	});
	echo "sorted with short way<br>";
	foreach ($unsort as $key => $value) {
		echo "$key: $value <br>";
	}

	echo "<br>";

	//sorting sub array key
	$unsorts = array(
		'0' => array(
			'posisi' => '2',
			'content' => 'bebek',
		),
		'1' => array(
			'posisi' => '3',
			'content' => 'cacing',
		),
		'2' => array(
			'posisi' => '1',
			'content' => 'ayam',
		),
	);

	echo "<br>";

	//show array
	var_dump($unsorts);

	echo "<br><br>";

	//show unsort array with nice display
	echo "unsort<br>";
	for ($i=0; $i < count($unsorts) ; $i++) { 
		echo $unsorts[$i]['posisi'].' : '.$unsorts[$i]['content'].'<br>';
	}

	echo "<br>";

	//sorting desc array with key date
	usort($unsorts, function($a, $b) 
	{
	    return $b['posisi'] - $a['posisi'];
	});
	//show sorted desc array with nice display
	echo "sorted desc<br>";
	for ($i=0; $i < count($unsorts) ; $i++) { 
		echo $unsorts[$i]['posisi'].' : '.$unsorts[$i]['content'].'<br>';
	}

	echo "<br>";

	//sorting asc array with key date
	usort($unsorts, function($a, $b) 
	{
	    return $a['posisi'] - $b['posisi'];
	});
	//show sorted asc array with nice display
	echo "sorted asc<br>";
	for ($i=0; $i < count($unsorts) ; $i++) { 
		echo $unsorts[$i]['posisi'].' : '.$unsorts[$i]['content'].'<br>';
	}

	echo "<br>";

//show array to json
	$array_to_json = array(
		'1' => 'ayam',
		'3' => 'cacing',
		'2' => 'bebek',
	);

	$json = json_encode($array_to_json);
	echo $json;
?>