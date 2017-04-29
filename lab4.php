<html>
<head>
    <title>lab 2
    </title>
</head>
<body>
<form method="post" action="">
    <textarea rows="10" cols="45" name="arr"></textarea>
    <input type="submit" name="button" value="Отправить">
</form>
</body>
</html>
<?php
function floyd ($matx, $a, $b) {
	$mat_path = $matx;
	$mat_vertex = array();
	foreach($mat_path as $row)
		foreach($row as $elem)
			if ($elem == 0)
				$elem = 100000000;
	for ($i = 0; i<count($mat_path); i++)
		for ($j = 0; i<count($mat_path); i++)
			for ($k = 0; i<count($mat_path); i++)
				if ($mat_path[$j][$k] > $math_path[$j][$i] + $math_path[$i][$k]) {
					$math_path[$j][$k] = $math_path[$j][$i] + $math_path[$i][$k];
					$math_vertex[$j][$k] = $i;
				}			
}

if(isset($_POST['button'])) {
    $arr_full = $_POST['arr'];
	$arr = explode("\n", $arr_full);
	foreach($arr as $row)
		$mat[] = explode(" ", $row);
	 
	
	
	print_r($mat);
}
?>