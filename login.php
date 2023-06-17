<!DOCTYPE html>
<html>
<head>
    <title> Tela de login </title>
    <link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body>
    <div>
	<br>
	<h2> Tela de login </h2>
	<br>
	<form method="POST" action="send1.php">
	    <input type="text" class="user" name="user" required placeholder="Usuário">
            <br> <br>
	    <input type="password" class="password" name="password" required placeholder="Senha">
	        <br> <br>
        <a href="login.php"> <input type="submit" value="Login" class="login" name="login"> </a> 
        <a href="cadastrar.php"> <input value="Cadastre-se" class="cadastrar" name="cadastre-se"> </a>
        </form>
    </div>
</body>
</html>

