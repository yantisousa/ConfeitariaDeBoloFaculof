<?php
if(isset($_POST['update'])){
    include_once('configDB.php');

   
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlrec ="UPDATE dados_users SET senha= '$senha' WHERE nome= '$nome' and email ='$email'";

    $remember = $conexao->query($sqlrec);

    header('Location: invalidated.php');


  
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto&display=swap" rel="stylesheet">
<style>
    body {
        background-color: white;
        font-family: "Poppins";
        margin: 0px;
        padding: 0px;
    }

    /* Header */
    .logo img {
        height: 120px;
        display: inline;
    }

    .logo {
        display: inline;
        position: relative;
        left: 20%;
    }

    .link-header {
        display: inline;
    }

    .login-header {
        display: inline;
    }

    .link-header a {
        text-decoration: none;
        color: black;
        position: relative;
        left: 40%;
        bottom: 50px;
        font-size: 20px;
        margin: 20px;
    }

    .link-header a:hover {
        color: white;
    }

    .login-header button {
        position: relative;
        left: 40%;
        bottom: 51px;
        background-color: #89521e;
        height: 30px;
        width: 80px;
        border: 0px;
        border-radius: 10px;
        cursor: pointer;
    }

    .login-header a button {
        color: white;
        text-decoration: none;
    }

    .login-header button:hover {
        background-color: #552c1e;

    }

    .form-login {
        width: 100vw;
        height: 90vh;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .form-style input {
        width: 500px;
        height: 50px;
        margin-top: 20px;
        border-radius: 10px;
    }

    .form-style h1,
    h4 {
        text-align: center;
    }

    .submit-1 {
        background-color: #552c1e;
        cursor: pointer;
        background-color: #89521e;
    }

    .btn-1 {
        background-color: #89521e;
        height: 30px;
        width: 80px;
        border: 0px;
        border-radius: 10px;
        cursor: pointer;
        position: relative;
        left: 190px;
    }
</style>
</head>

<body>
<header>
    <div>
        <!-- div que movimenta tudo -->
        <div class="logo">
        <a href="home.php"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="link-header">
            <a href="">Home</a>
            <a href="">Serviços</a>
            <a href="">Quem Somos</a>
            <a href="">Contatos</a>
            <a href="login.php"><button class="btn-1">Login</button></a>
        </div>

    </div>
</header>
<div class="form-login">
    <div class="form-style">
        <h1>Redefinição de senha</h1>
                <p>
        <form action="esquecisenha.php" method="POST">
            <input type="text" placeholder="Digite seu nome completo" name="nome" required><br>
            <input type="text" name="email" placeholder="Email" required><br>
            <input type="password" name="senha" placeholder="Digite sua nova senha"><br>
         
            <input class="submit-1" type="submit" name="update" value="Enviar">
            <br><br><br>
            <hr>
            
        </form>
    </div>
</div>

</body>

</html>

