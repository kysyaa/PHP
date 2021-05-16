<html>
<head>
<meta charset="UTF-8">

</head>
<body>
<?php
function square() {
    $sqrt = $_POST['sqrt'] ?? null;
    if ($sqrt >= 100 || $sqrt <=-100) {
        echo "Модуль больше 100";
    } elseif ($sqrt == null) {
            echo "Введите значение";
            } else {
            echo ' В квардрате ' .pow($sqrt, 2) . ''. "</br>";
            }
}


function pie() {
    $rub = $_POST ['rub'] ?? 1;
    $cent = $_POST ['cent'] ?? 0;
    $amount = $_POST ['amount'] ?? 1;
    
     if ($rub == null || $cent == null || $amount == null) {
         $rub =0; $cent =0; $amount = 0;
     } else {
        $rub = $rub * $amount;
        $cent = $cent * $amount;

        while ( $cent >= 100) {
            $cent = $cent - 100;
            $rub  = $rub + 1;
        } 
        echo 'Цена: '. $rub ."р.". $cent ."коп.". '  Количество: '. $amount;
    }
    
}

function sortt() {
    
    $sort = str_split(($_POST['sort']));
    
   $sortcount = count($sort);
        if ($sortcount > 4 || $sort == null) {
            echo "Введите 4-х значение число";
        } else {
            rsort($sort);
            $sort =implode('', $sort);
            echo $sort;
			
        }
}
function Vasya() {
    $road1 = $_POST ['road1'] ?? 0;
    $road2 = $_POST ['road2'] ?? 0;
    $midroad = $_POST ['midroad'] ?? 0;
if ($road1 == null || $road2 == null || $midroad = null) {
    echo "Введите все значения";
} else {
$sum = $road1 + $road2 + $midroad;
$count1 = 2*($road1+$road2);
$count2 = 2*($road2+$midroad);
$count3 = 2*($road1+$midroad);
if  ($count1<=$sum) {
    echo $sum;
} elseif ($count3<=$count1) {
    echo $count1;
} elseif ($count2<=$count3) {
    echo $count3;
} else {
   echo $count2;
}
}
}

function automorphic() {
    $num = $_POST['autonum'] ?? 0;
    if ($num <= pow(10,6)) {
    $from = 0;
    while ($from <= $num) {
        $square = pow($from,2)- $from;
        
        if (($square) % pow(10, strlen($from)) == 0) {
            echo  $from . " " ;
        }
        $from++;
    }
    }elseif ($num){

    } else {
        echo "Число больше 10^6";
    }
}

function messyv() {
    $rand = $_POST['rand'];
    $arrays = explode(' ', $_POST['array']);
    // if ($rand > 100 || $rand < 1) {
    //     echo "Введите число от -100 до 100";
    // } else {
    //     for ($i = 1; $i < $rand; $i++) {
    //     $arr = array( rand(-100, 100) );
    //     var_dump($arr);
    //     }
        foreach ($arrays as $array) {
            $array = $array + next($arrays);
                if ($array == 0) {
                    print_r($array);
                    
                }
                echo "<br>";
            echo $array . '</br>';
        }
   // var_dump($rand) . '<br>';
   // var_dump($arr);
     
    //var_dump($array). '<br>';
   // echo array_diff_key($arr, $array);
    }
//}

function Prime($num) {
    if($num == 2)
        return 0;
    for ($ss = 2; $ss <= $num/2; $ss++) {
        if ($num % $ss == 0) {
            return 0;
        }
    } 
    return 1;
}



function primenumber($nums) {
    if ($nums > 1 && $nums < 2 * pow(10,5)) {
    $qq = Prime($nums);
    if ($qq==1) {
        echo "prime";
    }else {
        echo"composite";
    } 
} elseif ($nums == null) {
    echo "Введите число";

} else {
    echo "Введите натуральное число от 2 до 200.000";

}
}

function years() {

}









// if (!isset($_GET['a'])) {
//     $a = null;
// } elseif (!is_string($_GET['a'])) {
//     $a = false;
// } else {
//     $a = $_GET['a'];
// }
?>
<h3> Задание 1</h3>
<form method="post">
    <input type="number" name="sqrt">
    <button type="submit"> Возвести </button>
    <?php echo square() ;?>
</form>

<h3> Задание 2</h3>
<form method="post">
   Руб: <input type="number" name="rub">
   Коп: <input type="number" name="cent"></br>
   Количество: <input type="text" name="amount"></br>
    <button type="submit"> Посчитать </button>
   <p> <?php echo pie(); ?></p>
   </form>

<h3> Задание 3</h3>
<form method="post">
    <input type="number" name="sort"></br>
    <button type="submit"> Сортировать </button></br>
    <?php echo sortt() ?>
</form>

<h3> Задание 4</h3>
<form method="post">
Расстрояние от дома до 1 мазазина: <input type="number" name="road1" ></br>
Расстрояние от дома до 2 мазазина: <input type="number" name="road2"></br>
Расстрояние между магазинами:   <input type="number" name="midroad"></br>
    <button type="submit"> Вычислить</button></br>
    <?php echo Vasya() ?>
</form>

<h3> Задание 1</h3>
<form method="post">
    <input type="number" name="autonum"></br>
    <button type="submit"> Числа </button></br>
    <?php echo automorphic() ?>
</form>

<h3> Задание 2</h3>
<form method="post">
    <input type="number" name="rand"></br>
    <input type="text" name="array"></br>
    <button type="submit"> Числа </button></br>
    <?php echo messyv() ?>
</form>

<h3> Задание 3</h3>
<form method="post">
    <input type="number" name="prime"></br>
    <button type="submit"> Проверить </button></br>
    <?php echo primenumber($nums=$_POST['prime'])?>
</form>

<h3> Задание 4</h3>
<form method="post">
    <input type="number" name="year"></br>
    <button type="submit"> Числа </button></br>
    <?php echo years()
    ?>
</form>

</body>
</html>
