<?php

    include ('connect.php');

    if ($_SERVER ["REQUEST_METHOD"] == "POST") {

        $name = addslashes ($_POST ['name']);
        $email = addslashes ($_POST ['email']);
        $password = md5 (addslashes ($_POST ['password']));
        $confirm = md5 (addslashes ($_POST ['confirm']));
    
        if ($password === $confirm && $confirm == $password) {

            $result = "insert into cadastrar (name, email, password, confirm) values ('$name', '$email', '$password', '$confirm');";
            $create = "create table cadastrar (id int primary key auto_increment, name varchar (100) not null, email varchar (100) not null, password varchar (32) not null, confirm varchar (32) not null);";

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

        } else {
            
            echo "A senha e confirmar senha não coincidem!";
        
        }
    
    }

?>
