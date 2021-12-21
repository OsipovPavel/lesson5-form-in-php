<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма входа и регистрации</title>
</head>
<body>
    <?php
    $form = "<form action='index6.php' method='POST'>
    <input type='text' name='login' placeholder='Введите логин'>
    <input type='password' name='password' placeholder='Введите пароль'>
    <input type='submit' value='Войти'> 
    </form>";
        if (!isset($_POST["login"])) {
            echo $form;
        }
        else {
            $login = 'Vasya';
            $password = 'dfcz';
            if ($_POST["login"] == $login & $_POST["password"] == $password) {
                header('Location: http://localhost/lesson5/hello6.html');
            }
            else {
                echo $form.'<br/>';
                echo "<p>Вы ввели неправильный логин или пароль. Попробуйте еще раз или <a href='register6.html'>Зарегистрируйтесь</a></p>";
            }
        }
    ?>
</body>
</html>