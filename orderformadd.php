<html>

<head>
    <title>Работа 15</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Добавить студента</h1>
    <p><a href='index.php'>Список студентов</a>
    <form action="processorderadd.php" method=post>
        <table border=0>
            <tr bgcolor=#cccccc>
            <tr>
                <td>Фио
                <td align=left><input type="text" name="fio" size=3 maxlengt=10>
            <tr>
                <td>Дата рождения
                <td align=left><input type="date" name="birthday" size=3 >
            <tr>
                <td>Номер зачетки
                <td align=left><input type="text" name="numberza" size=3 maxlength=10>
            <tr>
                <td>Пасспортные данные
                <td align=center><input type="text" name="passport" size=60>
            <tr>
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
            <td>Пол
                <form action="" method="GET">
	<select name="gender">
		<option value="Мужской" <?php
			if (!empty($_GET['gender']) and $_GET['gender'] === '1') {
				echo 'selected';
			}
		?>>Мужской</option>
		<option value="Женский" <?php
			if (!empty($_GET['gender']) and $_GET['gender'] === '2') {
				echo 'selected';
			}
		?>>Женский</option>
		
	</select>
</form>
            <tr>

            
                <td colspan=2 align=center><input type=submit value="Добавить студента"></td>
        </table>
    </form>
</body>

</html>