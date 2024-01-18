<html>

<head>
    <title>"Web-программирование" (Мартюшев С. М.) - Работа
        5</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Университет</h1>
    <p><a href='index.php'>Студенты</a>
    <h2>Изменение данных студента</h2>
    <form action="processorderedit.php" method=post>
                    <?php
                    $id = $_REQUEST['id'];
                    echo '<input type="hidden" name="id" value="' . $id . '">';
                    $handle = new mysqli('localhost', 'root', '', 'student');
                    $query = "SELECT id, fio, birthday, numberza, passport, group1 ,gender, date_format(birthday,'%d.%m.%Y %H:%i') as birthday
                   FROM information
                        WHERE id=$id";
                    $result = $handle->query($query);
                    $row = $result->fetch_assoc();
                    echo '<p><tr><td>Фио<td align=left><input type="text"
name="fio" size=3 maxlength=15 value=' . $row['fio'] . '>';
                    echo '<p><tr><td>День рождения<td align=left><input type="text"
name="birthday" size=10 maxlength=1 value=' . $row['birthday'] . '>';
                    echo '<p><tr><td>Номер зачетки<td align=left><input type="text"
name="numberza" size=10 maxlength=3 value=' . $row['numberza'] . '>';
                    echo '<p><tr><td>Пасспортные данные<td align=center><input type="text"
name="passport" size=8 value="' . $row['passport'] . '">';
echo '<p><tr><td>Пол<td align=center><input type="text"
name="gender" size=8 value="' . $row['gender'] . '">';
?>
<dt>
<td>Группа 
                <?php
$handle = new mysqli('localhost', 'root', '', 'student');
$query = "SELECT * FROM `group`
ORDER BY gruppa DESC";
$result = $handle->query($query);
?>
<select name="group1">
<?php foreach ($result as $group) { ?>
<option value="<?= $group['idi']?>"><?= $group[ 'gruppa']?></option>
<?php } ?>
            <tr>
            <tr>
            </tr>
                <td colspan=2 align=center><input type=submit value="Изменить данные"></td>
            </tr>
        </table>
    </form>
</body>

</html>