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
	for ($i = 1; $i < count($mat_path) + 1; $i++)
		for ($j = 1; $j < count($mat_path) + 1; $j++) {
			if ($mat_path[$i][$j] == 0)
				$mat_path[$i][$j] = $inf;
			if ($mat_path[$i][$j] == $inf)
				$mat_vertex[$i][$j] = 0;
			else
				$mat_vertex[$i][$j] = $j;
	}
	echo "//<u>1,2,3,4</u></br>";
	for ($i = 1; $i < count($mat_vertex) + 1; $i++) {
		echo "$i|";
		for ($j = 1; $j < count($mat_vertex) + 1; $j++)
			echo $mat_vertex[$i][$j]." ";
	echo "</br>";
	}
	
	echo "</br>";
	for ($i = 1; $i < count($mat_path) + 1; $i++)
		for ($j = 1; $j < count($mat_path) + 1; $j++)
			for ($k = 1; $k < count($mat_path) + 1; $k++)
				if ($mat_path[$j][$k] > $mat_path[$j][$i] + $mat_path[$i][$k]) {
					$mat_path[$j][$k] = $mat_path[$j][$i] + $mat_path[$i][$k];
					$mat_vertex[$j][$k] = $mat_vertex[$j][$i];
				}
				
   
	echo "</br>";
	echo "//<u>1,2,3,4</u></br>";
	for ($i = 1; $i < count($mat_path) + 1; $i++) {
		echo "$i|";
		for ($j = 1; $j < count($mat_path) + 1; $j++)
			echo $mat_path[$i][$j]." ";
		echo "</br>";
	}
	
	echo "</br>";
	for ($i = 1; $i < count($mat_vertex) + 1; $i++) {
		for ($j = 1; $j < count($mat_vertex) + 1; $j++)
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
	
	for ($i = 0; $i < count($mat); $i++)
		for ($j = 0; $j < count($mat); $j++)
			$mat2[$i + 1][$j + 1] = $mat[$i][$j];
	
	
	echo "</br>";
	floyd($mat2, 1, 2);
}
?>
