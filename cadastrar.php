<!DOCTYPE html>
<html>
<head>
    <title> Tela de login </title>
    <link rel="stylesheet" type="text/css" href="styles/cadastrar.css">
</head>
<body>
    <div>
	<br>
	<h2> Tela de cadastrar </h2>
	<br>
	<form method="POST" action="send2.php">
	    <input type="text" name="name" placeholder="Usuario">
            <br> <br>
	    <input type="email" name="email" placeholder="E-mail">
	        <br> <br>
        <input type="password" name="password" placeholder="Senha">
            <br> <br>
        <input type="password" name="password" placeholder="Confirmar senha">
            <br> <br>
        <a href="login.php"> <input value="Voltar" class="voltar" name="voltar"> </a>
        <button type="submit" value="cadastrar" class="cadastrar" name="cadastrar"> Cadastrar </button>
        </form>
    </div>
</body>
</html>