<?php 
    include "connect.php";
    require "vars.php";

    $pass = md5($pass."1pd3sd3");

    
    $result = $induction -> query("SELECT * FROM `users` WHERE  (`login`,`pass`) = ('$login', '$pass')");
    $user = $result->fetch_assoc();

    if(count($user) == 0){
        echo "Такой пользователь не найден.";
        exit();
    }


    setcookie('user', $user['name'], time() + 3600 * 24, "/");
    setcookie('id', $user['id'], time() + 3600 * 24, "/");
    setcookie('email', $user['email'], time() + 3600 * 24, "/");
    setcookie('tel', $user['tel'], time() + 3600 * 24, "/");
    
    $induction->close;

    header('Location: /');


?>