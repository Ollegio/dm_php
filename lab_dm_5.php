<html>
	<head>
		<title>lab 5</title>
	</head>
	<body>
	<form method='post'>
		 <textarea rows="10" cols="45" name="matx"></textarea>
		<input type='submit' name='submit' value='Расчитать'></input>
	</form>
	<?php
	if (isset($_POST['submit'])){
	$mat = explode("\n", $_POST['matx']);
	$W = array(array(1,0,0,0),array(0,1,0,0),array(0,0,1,0),array(0,0,0,1));
	foreach ($mat as $row)
		$arr[] = explode(" ", $row);
	echo "</br>";
	foreach($arr as $row){
		foreach($row as $elem)
			echo $elem." ";
		echo "</br>";
	}
 	for ($k = 0; $k < count($arr); $k++)
		for ($i = 0; $i < count($arr); $i++){
			for ($j = 0; $j < count($arr); $j++){
				if ($arr[$i][$j] != 0)
					$W[$i][$j] = 1;
				elseif ($arr[$i][$k] != 0 and $arr[$k][$j] != 0) {
					$W[$i][$j] = 1;
				}
			}
	}
			
	echo "</br>";
	foreach($W as $row){
		foreach($row as $elem)
			echo $elem." ";
		echo "</br>";
		}
	}?>
	</body>
</html>
