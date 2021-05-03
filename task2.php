<html>
<head>

</head>
<body>
<?php
$title =( $_POST['title']);
$text = $_POST['text'];
$date = $_POST['date'];
$id = $_GET['id'];
try {

$dbconn = pg_connect("host=localhost port=5432 dbname=sqller user=postgres password=postgres")
    or die('Не удалось соединиться: ' . pg_last_error());

// Выполнение SQL-запроса
$query = 'SELECT * FROM post';
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

 //Вывод результатов в HTML


//$add = pg_insert($dbconn , 'posts', $_POST );
if( !empty($title) && !empty($text) && !empty($date)) {
$res = pg_query($dbconn, "INSERT INTO post (title,context,date) VALUES('$title','$text', '$date')");
echo "Информация занесена в базу данных". "</br>";
} else {
    echo 'Пожалуйста заполните все поля'. "</br>";
}



// Очистка результата
//pg_free_result($result);

// Закрытие соединения
//pg_close($dbconn);
} catch(PDOException $e){
    echo $e->getMessage();
    die;
}
/*
if ($result) {
    echo "Информация занесена в базу данных";
} else {
} */
?>

<form method="POST">
    Заголовок:</br><input type="text" name="title" ></br>
    Текст: </br><input type="text" name="text" ></br>
    Введите дату:</br> <input type="date" name="date" ></br>
    </br><input type="Submit">
</form>
</br></br>
<?php 

if (!empty($id)) {
    $res = pg_query($dbconn, "SELECT title,context,date from post where id=('$id')");
    while ($row = pg_fetch_row($res)) {
        echo "<table>
        <tr>
            <td>ID</td><td>Title</td><td>Content</td><td>Date</td>
        </tr>";
        echo "<tr>
        <td>$id</td>" ." <td>$row[0]</td>"."<td>$row[1]</td>"."<td>$row[2]</td></tr>";
        echo "<br />\n";
    }
     } else {
        echo 'Введите id';
        }
    
?>
<form method="GET">
    ID Для вывода строки:</br><input type="text" name="id" ></br>
    </br><input type="Submit">
</form>

</body>
</html>