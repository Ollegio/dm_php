<html>
<head>
    <title>lab2
    </title>
</head>
<body>
<form method="post" action="lab_dm_2.php">
    <input name="arr" type="text" placeholder="Множество">
    <input type="submit" name="button" value="Отправить">
</form>
</body>
</html>
<?php
if(isset($_POST['button'])) {
    $arr_full = $_POST['arr'];
    $arr = explode(")", implode("", explode("(", $arr_full)));

    foreach($arr as $value)
        echo $value." ";
    
    
    
}
?>