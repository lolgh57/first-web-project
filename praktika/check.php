<?php
    include "connect.php";
    require "vars.php";

    // $id = $_post['id'];

    if (mb_strlen($login) < 3 || mb_strlen($login) > 16){
        echo "Недопустимая длина логина!";
        exit();
    } else if(mb_strlen($name) < 10 || mb_strlen($name) > 100){
        echo "Недопустимая длина имени!";
        exit();
    } else if(mb_strlen($passport) != 10){
        echo "Паспортные данные введены не корректно!";
        exit();
    } else if(mb_strlen($email) < 4 || mb_strlen($email) > 50){
        echo "Слишком маленький или большой Email!";
        exit();
    } else if(mb_strlen($pass) < 6 || mb_strlen($pass) > 16){
        echo "Слишком маленький или большой пароль!(от 6 до 16 символов)";
        exit();
    }

    $pass = md5($pass."1pd3sd3");

    if(!$induction->query("INSERT INTO `users` (`id`,`login`, `name`, `passport`, `email`, `pass`,`tel`) VALUES ('$id','$login', '$name', '$passport', '$email', '$pass','')")){
        echo "Ошибка занесения данных в таблицу";
        exit();
    }
    $induction->close;


    header('Location: /');

?>