<html>
<head>
<?php
function day() {
    $day = $_GET['days'] ?? 1;
    $sec = $day * 3600 *24;
    echo ' = '. $sec . ""; 
}
    ?>
</head>
<body>
    <?php echo '<h3>Задание 1</h3>';?>
    <form method="GET">
   Days: <input type="text" name="days" value="1">
   <input type="submit" value="Перевести">
   <?php echo day() . ' seconds';?>
</form>
    
    
    <?php echo '<h3>Задание 2</h3>';?>
<form method="POST">
    First name: <input type="text" name="first_name" ></br>
    Last name: <input type="text" name="last_name" ></br>
    Patronymic: <input type="text" name="patronymic" ></br>
    </br><input type="Submit">
</form>
<?php echo 'You are: '. $_POST['first_name'] . ' ' . $_POST['last_name'] . ' ' . $_POST['patronymic'] . '</br>';
     echo '<h3>Задание 3</h3>';
   $array = array();
   for($i=0; $i<=50; $i++) {
       $array[$i] = rand(1, 1000);
   }
   echo 'Max: ' . max($array).'<br>';
   echo 'Min: ' . min($array).'<br>';   
   $b= array_sum ($array)/count($array);
   echo 'Average: ' . $b;
   echo '<h3>Задание 4</h3>';
echo 
'
    <form action = "" method = "GET">
        Reverse: <input type = "text" name = "reverse" >
        <input type = "submit" value="Reverse">
    </form>
';
$reverse = $_GET['reverse'];
echo strrev($reverse);
?>
</body>
</html>
