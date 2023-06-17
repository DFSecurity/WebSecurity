<?php

    include ('connect.php');

    if ($_SERVER ["REQUEST_METHOD"] == "POST") {

        $name = addslashes ($_POST ['name']);
        $email = addslashes ($_POST ['email']);
        $password = md5 (addslashes ($_POST ['password']));
        $confirm = md5 (addslashes ($_POST ['confirm']));

        $result = "insert into cadastrar (name, email, password, confirm) values ('$name', '$email', '$password', '$confirm');";
        
        if ($password === $confirm && $confirm == $password) {
                
            $checkname = "select * from cadastrar where name = '$name'";
            $checkresultname = $connect -> query ($checkname);

            $checkemail = "select * from cadastrar where email = '$email'";
            $checkresultemail = $connect -> query ($checkemail);

            if ($checkresultname -> num_rows > 0 && $checkresultemail -> num_rows > 0) {
                echo '<script type="text/JavaScript"> alert ("Usuário e E-mail já cadastrado, tente novamente!"); </script>';
                echo "<meta http-equiv=refresh content='0;URL=index.html'>";
            } else if ($checkresultname -> num_rows > 0) {
                echo '<script type="text/JavaScript"> alert ("Usuário já cadastrado, tente novamente!"); </script>';
                echo "<meta http-equiv=refresh content='0;URL=index.html'>";
            } else if ($checkresultemail -> num_rows > 0) {
                echo '<script type="text/JavaScript"> alert ("E-mail já cadastrado, tente novamente!"); </script>';
                echo "<meta http-equiv=refresh content='0;URL=index.html'>";
            } else {

                if (mysqli_query ($connect, $result)) {
                    echo '<script type="text/JavaScript"> alert ("Usuário cadastrado com sucesso!"); </script>';
                    echo "<meta http-equiv=refresh content='0;URL=index.html'>";
                } else {
                    echo "Error";
                }

                mysqli_close ($connect);

            }

        } else {
            echo '<script type="text/javascript"> alert ("A senha e confirmar senha não coincidem, tente novamente!"); </script>';
            echo "<meta http-equiv=refresh content='0;URL=cadastrar.php'>";
        }
    
    }

?>
