
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1></h1>
    <h2>Удаление информации</h2>
    <?php
    $id = $_REQUEST['id'];
    $handle = new mysqli('localhost', 'root', '', 'student');
    $query = "DELETE FROM information WHERE id=$id";
    $result = $handle->query($query);
    if ($result) echo "Данные удалены";
    if (!$result) echo "Ошибка удаления данных";
    echo "<p><a href='index.php'>Информация</a>";
    ?>
</body>

</html>