<html>
<head>
    <title>lab 2
    </title>
</head>
<body>
<form method="post" action="">
    <textarea rows="10" cols="45" name="arr"></textarea>
    <input type="submit" name="button" value="Ioi?aaeou">
</form>
</body>
</html>
<?php
function floyd ($matx, $a, $b) {
	$mat_path = $matx;
	$mat_vertex = array();
	$inf = 100000000;
	for ($i = 0; $i < count($mat_path); $i++)
		for ($j = 0; $j < count($mat_path); $j++) {
			if ($mat_path[$i][$j] == 0)
				$mat_path[$i][$j] = $inf;
			if ($mat_path[$i][$j] == $inf)
				$mat_vertex[$i][$j] = 0;
			else
				$mat_vertex[$i][$j] = $j;
	}
	for ($i = 0; $i < count($mat_vertex); $i++) {
		for ($j = 0; $j < count($mat_vertex); $j++)
			echo $mat_vertex[$i][$j]." ";
	echo "</br>";
	}
	echo "</br>";
	for ($i = 0; $i < count($mat_path); $i++)
		for ($j = 0; $j < count($mat_path); $j++)
			for ($k = 0; $k < count($mat_path); $k++)
				if ($mat_path[$j][$k] > $mat_path[$j][$i] + $mat_path[$i][$k]) {
					$mat_path[$j][$k] = $mat_path[$j][$i] + $mat_path[$i][$k];
					$mat_vertex[$j][$k] = $mat_vertex[$i][$k];
				}
				
   
	echo "</br>";
	for ($i = 0; $i < count($mat_path); $i++) {
		for ($j = 0; $j < count($mat_path); $j++)
			echo $mat_path[$i][$j]." ";
	echo "</br>";
	}
	echo "</br>";
	for ($i = 0; $i < count($mat_vertex); $i++) {
		for ($j = 0; $j < count($mat_vertex); $j++)
			echo $mat_vertex[$i][$j]." ";
	echo "</br>";
	}
	$f = $mat_vertex[$a][$b];
	while (1) {
	echo " ".$f;
	$f -= 1;
	$f = $mat_vertex[$a][$f];
	if ($f == $a) break;
	}

}
if(isset($_POST['button'])) {
    $arr_full = $_POST['arr'];
	$arr = explode("\n", $arr_full);
	foreach($arr as $row)
		$mat[] = explode(" ", $row);
	
	
	
	
	
	echo "</br>";
	floyd($mat, 0, 2);
}
?>
