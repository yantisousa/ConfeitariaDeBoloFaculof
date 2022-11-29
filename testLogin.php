<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['email'])) {
        include_once('configDB.php');

        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM dados_users WHERE email = '$email' and senha = '$senha'";
        
        $dados = $conexao->query($sql);

       if(mysqli_num_rows($dados) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
       }else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
    }
  

?>