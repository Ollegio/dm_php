<html>
<head>
    <title>lab1
    </title>
</head>
<body>
<form method="post" action="index.php">
    <input name="arr1" type="text" placeholder="Множество 1">
    <input name="arr2" type="text" placeholder="Множество 2">
    <input type="submit" name="button" value="Отправить">
</form>
</body>
</html>
<?php
if(isset($_POST['button'])) {
    $arr1_full = $_POST['arr1'];
    $arr1 = array_unique(explode(" ", $arr1_full));
    $arr2_full = $_POST['arr2'];
    $arr2 = array_unique(explode(" ", $arr2_full));
    function check($in_arr) {
        foreach($in_arr as $key => $value) {
            if ((is_numeric($value)) && (strlen($value) == 4) && (($value/100%10)%2 == 0) && (($value/10%10)%2 != 0) && (($value%10)%2 == 0)) {
                echo $value."</br>";
            }
            else {
                echo "invalid element ".$value."</br>";
            }
        }
    }
    function merge($arra, $arrb) {
		if($arrb)
			foreach($arrb as $value)
				$arra[] = $value;
		if ($arra) {
        $merged_arr = array_unique($arra);
        foreach($merged_arr as $valuem)
            echo $valuem." ";
			}
    }
    function intersect($arra, $arrb) {
		foreach($arra as $a_value) {
			foreach($arrb as $b_value) {
				if ($a_value == $b_value)
					$int_arr[] = $a_value;
			}
		}
		if ($int_arr) {
		$int_arr = array_unique($int_arr);
        foreach($int_arr as $valuei)
            echo $valuei." ";
			}
    }
    function sym_diff($arra, $arrb) {
        $sd_arr = merge(complement($arra,$arrb), complement($arrb,$arra));
		if ($sd_arr)
			foreach($sd_arr as $valuesd)
				echo $valuesd." ";
    }
    function complement($arra, $arrb) {
	$flag = 0;
		foreach($arra as $a_value) {
			foreach($arrb as $b_value) {
				if ($a_value == $b_value)
					$flag++;
			}
			if ($flag == 0)
				$diff_arr[] = $a_value;
			$flag = 0;
		}
		if ($diff_arr)
        foreach($diff_arr as $valued)
            echo $valued." ";
    }
    echo "Первое множество: </br>";
    check($arr1);
    echo "Второе множество: </br>";
    check($arr2);
    echo "</br>симметрическая разность:</br>";
    sym_diff($arr1, $arr2);
    echo "</br>объединение:</br>";
    merge($arr1, $arr2);
    echo "</br>пересечение:</br>";
    intersect($arr1, $arr2);
    echo "</br>дополнение:</br>";
    complement($arr1, $arr2);
}
?>
