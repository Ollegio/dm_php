<html>
<head>
    <title>lab 2
    </title>
</head>
<body>
���� ��� ���� (a,b),(c,d)</br>
<form method="post" action="">
    <input name="arr" type="text" placeholder="���������">
    <input type="submit" name="button" value="���������">
</form>
</body>
</html>
<?php
if(isset($_POST['button'])) {
    $arr_full = $_POST['arr'];
	$arr_full = substr_replace($arr_full, '', 0, 1);
	$arr_full = substr_replace($arr_full, '', strlen($arr_full)-1, 1);
    $arr = explode("),(", $arr_full);
    foreach($arr as $value) {
		$arr_rel[] = explode(",", $value);
	}
	foreach($arr_rel as $value) {
		$elems_1[] = $value[0];
		}

	foreach($arr_rel as $value) {
		$full_set[] = $value[0];
		$full_set[] = $value[1];
    }		
	$full_set = array_unique($full_set);
	echo "��������� :";
	foreach($arr_rel as $value)
		echo $value[0]."-",$value[1]." ";
		echo "</br>��� ��������: ";
	foreach($full_set as $value)
		echo $value." ";
	$flag_rfx = 0;
	$flag_sym = 0;
	$flag_sym_rel = 0;
	$flag_asym = 0;
	$flag_t = 0;
	$flag_t_rel = 0;
	$flag_func = 0;
	$flag_t_check = 0;
	foreach($full_set as $elem) 
		foreach($arr_rel as $rel_item) 
			if ($elem == $rel_item[0] and $elem == $rel_item[1])
				$flag_rfx += 1;
			
	foreach($full_set as $elem) 
		foreach($arr_rel as $rel_item)
			if ($elem == $rel_item[0]) {
			$flag_sym_rel +=1;
				foreach($arr_rel as $rel_item2)
					if ($rel_item2[0] == $rel_item[1] and $rel_item2[1] == $rel_item[0] and $rel_item2[0] != $rel_item2[1]) 
						$flag_sym += 1;
					elseif ($rel_item2[0] == $rel_item[1] and $rel_item2[1] == $rel_item[0] and $rel_item2[0] == $rel_item2[1]) {
						$flag_sym += 1;
						$flag_asym += 1;
					}
			}
			
	foreach($arr_rel as $rel_item) {
		$t1 = $rel_item[0];
		$t2 = $rel_item[1];
		foreach($arr_rel as $item_check) {
			if ($item_check[0] == $t2) {}
			else $flag_t_check += 1;
			}
			if ($flag_t_check != count($arr_rel))
				$flag_t_rel +=1;
				$flag_t_check = 0;

		foreach ($arr_rel as $rel_item2) {
			if ($rel_item2[0] == $t2 and $rel_item2[0] != $rel_item2[1]) {
				$t3 = $rel_item2[1];
				if (in_array(array($t1,$t3), $arr_rel))
					$flag_t += 1;
				}
		}
	}
			
			
	if ($flag_rfx == count($full_set))
		echo "</br>�����������";
	else
		echo "</br>�� �����������";
	
	if ($flag_sym == $flag_sym_rel)
		echo "</br>�����������";
	else
		echo "</br>�� �����������";
	
		if ($flag_sym == $flag_sym_rel and $flag_asym == $flag_sym)
		echo "</br>���������������";
	else
		echo "</br>�� ���������������";
		
		//echo $flag_t_rel." ".$flag_t;
			if ($flag_t >= $flag_t_rel)
		echo "</br>�����������";
	else
		echo "</br>�� �����������";
	
			foreach($arr_rel as $rel_item)
				foreach($arr_rel as $rel_item2)
					if ($rel_item[0] == $rel_item2[0])
						$flag_func += 1;
					
					
			if ($flag_func == 1)
		echo "</br>�������";
	else
		echo "</br>�� �������";
}
?>