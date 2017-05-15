<html>
<head>
    <title>lab 3
    </title>
</head>
<body>
<form method="post" action="">
	<input name="arr1" type="text" placeholder="Множество 1">
	<input name="arr2" type="text" placeholder="Множество 2">
    <input name="arr" type="text" placeholder="Отношение">
    <input type="submit" name="button" value="Отправить">
</form>
</body>
</html>
<?php
if(isset($_POST['button'])) {
    $arr_full = $_POST['arr'];
	$arr_full = substr_replace($arr_full, '', 0, 1);
	$arr_full = substr_replace($arr_full, '', strlen($arr_full)-1, 1);
    $arr = explode("),(", $arr_full);
	$arr = array_unique($arr);
    foreach($arr as $value) {
		$arr_rel[] = explode(",", $value);
	}

	$full_set1 = array_unique(explode(",",$_POST['arr1']));
	$full_set2 = array_unique(explode(",",$_POST['arr2']));
	
	foreach($arr_rel as $value)
		echo $value[0]."-",$value[1]." ";
		echo "</br>";
	foreach($full_set1 as $value)
		echo $value." ";
	echo "</br>";
	foreach($full_set2 as $value)
		echo $value." ";

	$flag_func = 0;
	
	
	foreach($arr_rel as $rel_item){
		foreach($arr_rel as $rel_item2)
			if ($rel_item[0] == $rel_item2[0])
				$flag_func += 1;
			$flag_func -=1;
	}
			
					
	foreach($arr_rel as $rel_item) {
		if (!in_array($rel_item[0], $full_set1))
			$flag_func += 1;
		if (!in_array($rel_item[1], $full_set2))
			$flag_func += 1;
	}
					
					
	if ($flag_func != 0)
		echo "</br>Не функция";
	else
		echo "</br>Функция";
} 
?>
