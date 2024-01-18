<html>

<head>
    <title>Работа 15</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h2>Результаты изменения </h2>
    <?php
    $id = $_REQUEST['id'];
    $FIO = $_REQUEST['fio'];
    $number = $_REQUEST['numberza'];
    $passport = $_REQUEST['passport'];
    $group= $_REQUEST['group1'];
    $gender = $_REQUEST['gender'];
    $birthday = $_REQUEST['birthday'];
    if ((!isset($FIO)) || (!isset($birthday)) || (!isset($number)) ||  (!isset($passport)) || (!isset($group))|| (!isset($gender))) {
        echo '<p>Вы не указали все данные. Повторите ввод заказа.';
        echo '<p><a href="orderformadd.php">К форме заказа</a>';
        echo '</body></html>';
        exit;
    }


    $handle = new mysqli('localhost', 'root', '', 'student');
    $query = "UPDATE information SET
 fio='$FIO',
 numberza='$number',
 passport='$passport',
 group1='$group',
 gender='$gender',
 birthday='$birthday'
 WHERE id='$id'";
    $result = $handle->query($query);
    if ($result) echo "Данные сохранены";
    if (!$result) echo "Ошибка сохранения данных";
    echo "<p><a href='index.php'>Принятые заказы</a>";
    ?>
</body>

</html>