<?php

    include ('connect.php');

    $name = addslashes ($_POST ['name']);
    $email = $_POST ['email'];
    $password = md5 (addslashes ($_POST ['password']));
    $result = "insert into cadastrar (name, email, password) values ('$name', '$email', '$password');";
    $create = "create table cadastrar (id int primary key auto_increment, name varchar (100) not null, email varchar (100) not null, password varchar (32) not null);";

    if ($connect -> query ($create)) {
        if (mysqli_query ($connect, $result)) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Error";
        }
    } else if (mysqli_query ($connect, $result)) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Error";
    }
 
    mysqli_close ($connect);

?>