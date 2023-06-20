<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
<?php
    if (!isset($_POST['send'])){
?>
<form action="regi.php" method="post">
    <h1>Зареєструйтесь</h1>
    <input class="text" ctype="email" name="email" placeholder="Example@gmail.com">
    <input class="text" type="password" name="password" placeholder="Password"> <br><br>
    <input class="button" type="submit" name="send" value="Зареєструватись">
</form>
<?php
    }
    elseif(isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){

        file_put_contents('list.txt', "Email - {$_POST['email']}, ", FILE_APPEND);
        file_put_contents('list.txt', "Password - {$_POST['password']};\n", FILE_APPEND);

        echo "Аккаунт успішно зареєстровано. <a href='regi.php'>Click</a>";
    }
    else{
        echo "Перевірьте чи всі данні введені правильно";
    }
?>
</body>
</html>