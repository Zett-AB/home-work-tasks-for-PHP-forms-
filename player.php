<?php


if (isset($_POST['name']) && isset($_POST['author'])) {
    $name = $_POST['name'];
    $author = $_POST['author'];

    $mysqli = new mysqli('localhost', 'root', '', 'home work forms');

    if (mysqli_connect_errno()) {
        printf("Соединение не установлено", mysqli_connect_error());
        exit();
    }

    $mysqli->set_charset('utf8');


    $result = $mysqli->query("INSERT INTO music VALUES(null,'$name','$author',now())");

    if ($result == true) {
        echo "<p class='form-page'>" . "Информация занесена в базу данных" . "</p>";
    } else {
        echo "<p class='form-page'>" . "Информация не занесена в базу данных" . "</p>";
    }

    $mysqli->close();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Work PHP 1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>

<body>
    <!-- <form action="player.php" method="post">
        <fieldset>
            <legend>Форма для заполнения данных в БД</legend>
            <input type="text" name="name" placeholder="название композиции" required></input>
            <input type="text" name="author" placeholder="имя исполнителя" required></input>

            <input type="submit" value="добавить">
        </fieldset>
    </form> -->
    <div class="button-home">
        <button class="btn-home">Пустышка</button>
        <a href="index.php" style="font-family: Philosopher; font-size:20px; color:blue;">вернуться обратно</a>
    </div>
    <div>
        <p>
            проверка
        </p>
    </div>



</body>

</html>