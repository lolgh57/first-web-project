<?php

$host_db = "localhost";
$host_login = "root";
$host_pass = "";
$host_base = "reg-bd";

$induction = new mysqli($host_db,$host_login,$host_pass,$host_base);

if(!$induction){
    echo '<h2>Ошибка подключения бд</h2>';
}

?>