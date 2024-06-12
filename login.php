<?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = $connection->prepare("SELECT * FROM users WHERE login=:username");
        $result->bindParam(":username", $username, PDO::PARAM_STR);
        $result->execute();
        $row = $result->fetch();
        echo $row;
        if (!$row) {
            $_SESSION['message'] = 'Неверные пароль или имя пользователя!';
        } else {
            if ($password == $row['password']) {
                $_SESSION['user'] = [
                    "id" => $row['id'],
                    "full_name" => $row['full_name'],
                    "email" => $row['email']
                ];
    
                setcookie("login",$row['login'], time() + 3600, "/");
                setcookie('password',$row['password'], time() + 3600, "/");
                setcookie('id',$row['id'], time() + 3600, "/");
                setcookie('full_name',$row['full_name'], time() + 3600, "/");
                setcookie('email',$row['email'], time() + 3600, "/");
                header('Location: https://php.local/new/profile.php');
            } else {
                $_SESSION['message'] = 'Неверные пароль или имя пользователя!';
                header('Location: https://php.local/new/signin.php');
            }
        }
    }
?>

<?php
session_start();
unser($_SESSION['user']);
header('Location: index.php');