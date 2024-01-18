<html>
<head>
    <title>Работа 15</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>
<body>
    <h1>Информация о студентах</h1>
    <h2>Список студентов</h2>
    <?php
    $handle = new mysqli('localhost', 'root', '', 'student');
    $query = "SELECT id, fio, birthday, numberza, passport, group1 ,gender, date_format(birthday,'%d.%m.%Y %H:%i') as birthday
         FROM information
         ORDER BY birthday DESC";
    $result = $handle->query($query);
    $numresult = $result->num_rows;
    //$select="SELECT id, group1 FROM 'group'";
    //$group=$handle->query($select);
    //$hytr=$group->fetch_assoc();
    ?>
    <?php
    echo '<p>Количество записей - ' . $numresult;
    echo '<table border=1>';
    echo '<tr><th>№</th>';
    echo '<th>Фио</th>';
    echo '<th>Дата рождения</th>';
    echo '<th>Номер зачетки</th>';
    echo '<th>Паспорт</th>';
    echo '<th>Группа</th>';
    echo '<th>Пол</th>';
    echo '<th></th>';
    echo '<th></th>';

    for ($i = 0; $i < $numresult; $i++) {
        $row = $result->fetch_assoc();
        echo '<tr><td>' . $row['id'];
        echo '</td><td>' . $row['fio'];
        echo '</td><td>' . $row['birthday'];
        echo '</td><td>' . $row['numberza'];
        echo '</td><td>' . $row['passport'];
        echo '</td><td>' . $row['group1'];
        echo '</td><td>' . $row['gender'];
        echo '</td><td>';
        echo '<form action="delorder.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<input type="submit" value="Удалить">';
        echo '</form>';
        echo '</td><td>';
        echo '<form action="orderformedit.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<input type="submit" value="Изменить">';
        echo '</form>';
        echo '</td><td>';
    }
    echo '</table>'
    ?>
    <p><a href='orderformadd.php'>Добавить студента</a>

    <p><a href='../index.php'>К содержанию</a>
</body>
</html>