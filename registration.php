<?php
    session_start();
    include('config.php');
    if (isset($_POST['register'])) {
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeat_password = $_POST['repeat_password'];
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            $_SESSION['message'] = 'Этот почтовый адрес уже зарегистрирован!';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(full_name,email,login,password) VALUES (:full_name,:email,:login,:password)");
            $query->bindParam(":full_name", $full_name, PDO::PARAM_STR);
            $query->bindParam(":login", $username, PDO::PARAM_STR);
            $query->bindParam(":password", $password, PDO::PARAM_STR);
            $query->bindParam(":email", $email, PDO::PARAM_STR);
            $query->execute();
            
            if ($query ->rowCount() > 0) {
                $_SESSION['message'] = 'Регистрация прошла успешно!';
                header('Location: https://php.local/new/signin.php');
            } else {
                $_SESSION['message'] = 'Неверные данные!';

            }
                
        }
    }
?>