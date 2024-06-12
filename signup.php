<?php
    session_start();

    if ($_SESSION['user'] ?? false) {
        header("Location: profile.php");
    }
?>

<?php
    include('registration.php');
?>

<!DOCTYPE html>
<html >
    <head>  
        <meta charset="UTF-8">  
        <title>Registation Form</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
            <div class="login">
                <h1>Регистрация</h1>
                <form action="signup.php" method="POST">
                    <input type="text" name="full_name" placeholder="Введите имя" required="" id="full_name" />
                    <input type="text" name="email" placeholder="Электронная почта" required="" id="email" />
                    <input type="text" name="username" placeholder="Логин" required="" id="username" />
                    <input type="password" name="password" placeholder="Пароль" required="" id="password" />
                    <input type="password" name="repeat_password" placeholder="Повторите пароль" required="" id="repeat_assword" />

                    <button type="submit" class="btn btn-primary btn-block btn-large"name="register" value="register">Зарегистрироваться</button>
                </form>
                <div class="foot-lnk">
                    <a href="signin.php" class="foot-link-text">Уже есть аккаунт</a>
				</div>
            </div>
    </body>
</html>