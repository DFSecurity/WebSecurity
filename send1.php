<?php

    include ('connect.php');

    $user = addslashes ($_POST ['user']);
    $password = md5 (addslashes ($_POST ['password']));
    $result = "insert into users (user, password) values ('$user', '$password');";
    $create = "create table users (id int primary key auto_increment, user varchar (100) not null, password varchar (32) not null);";

    if ($connect -> query ($create)) {
        if (mysqli_query ($connect, $result)) {
            echo "Usuário logado com sucesso!";
        } else {
            echo "Error";
        }
    } else if (mysqli_query ($connect, $result)) {
        echo "Usuário logado com sucesso!";
    } else {
        echo "Error";
    }
 
    mysqli_close ($connect);

?>