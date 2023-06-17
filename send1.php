<?php

    include ('connect.php');

    $name = addslashes ($_POST ['user']);
    $password = md5 (addslashes ($_POST ['password']));

    $checkname = "select * from cadastrar where name = '$name'";
    $checkresultname = $connect -> query ($checkname);
    $checkpassword = "select * from cadastrar where password = '$password'";
    $checkresultpassword = $connect -> query ($checkpassword);

    if ($checkresultname -> num_rows > 0 && $checkresultpassword -> num_rows > 0) {
        echo "Usuário logado com sucesso!";    
    } else {
        echo '<script type="text/JavaScript"> alert ("Usuário ou senha estão incorretos, tente novamente!") </script>';
        echo "<meta http-equiv=refresh content='0;URL=login.php'>";
    }

    mysqli_close ($connect);

?>
