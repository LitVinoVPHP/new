<?php
    session_start();

    if ($_SESSION['user'] ?? false) {
        header("Location: profile.php");
    }
?>
<?php
    include('login.php');
?>

<!DOCTYPE html>
<html >
    <head>  
        <meta charset="UTF-8">  
        <title>Login Form</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
            <div class="login">
                <h1>Вход</h1>
                <form action="signin.php" method="POST">
                    <input type="text" name="username" placeholder="Логин" required="" id="username" />
                    <input type="password" name="password" placeholder="Пароль" required="" id="password" />
                    <button type="submit" name="login" class="btn btn-primary btn-block btn-large">Войти</button>
                </form>
                <div class="foot-lnk">
                    <a href="signup.php" class="foot-link-text">Регистрация</a>
				</div>
            </div>
    </body>
</html>