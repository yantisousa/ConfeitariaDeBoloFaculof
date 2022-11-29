<?php
session_start();
include_once('configDB.php');


if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

$logado = $_SESSION['email'];



if (isset($_POST['submit'])) {



    include_once('configDB.php');

    $tipo = 'Bolo de Aniversário';
    $andares = $_POST['andares'];
    $ingredientes = $_POST['ingredientes'];
    $preco = "R$ ". 100 . "," . 00;

    $resultInsert = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, 
        andares, ingredientes, preco)VALUES ('$tipo', '$andares', '$ingredientes', '$preco')");
}


if (isset($_POST['submit-casa'])) {

    include_once('configDB.php');

    $tipo = 'Bolo de Casamento';
    $andares = $_POST['andares-casa'];
    $ingredientes = $_POST['ingredientes-casa'];

    $preco = "R$". 190 .  "," . 90;

    $resultInsert = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, 
        andares, ingredientes, preco)VALUES ('$tipo', '$andares', '$ingredientes', '$preco')");
}


if (isset($_POST['submit-case'])) {

    include_once('configDB.php');

    $tipo = 'Bolo Caseiro';
    $andares = $_POST['andares-case'];
    $ingredientes = $_POST['ingredientes-case'];

    $preco = "R$". 70 . ",". 90;

    $resultInsert = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, 
        andares, ingredientes, preco)VALUES ('$tipo', '$andares', '$ingredientes', '$preco')");
}
if (isset($_POST['submit-pote'])) {

    include_once('configDB.php');

    $tipo = 'Bolo de Pote';
    $andares = $_POST['andares-pote'];
    $ingredientes = $_POST['ingredientes-pote'];

    $preco = "R$". 7 . "," . 90;

    $resultInsert = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, 
        andares, ingredientes, preco)VALUES ('$tipo', '$andares', '$ingredientes', '$preco')");
}

if (isset($_POST['submit-coment'])) {

    $comentarios = $_POST['comentarios'];

    $selectComent = mysqli_query($conexao, "INSERT INTO dados_comentados(comentarios) VALUES ('$comentarios') ");

    
    
}


$registro = "SELECT * FROM dados_comentados ORDER BY id DESC";
$resultComentget = $conexao->query($registro);

$sql = "SELECT * FROM dados_inseridos ORDER BY id DESC";
$resultlist = $conexao->query($sql);

$calculo = "SELECT preco FROM dados_inseridos ORDER BY id DESC";
$calculoTotal =  $conexao->query($calculo);



date_default_timezone_set('America/Sao_Paulo');
include_once('configDB.php');
if(isset($_POST['horario'])){

    $horas = $_POST['horas'];
    $horaatual = date("H:i");
    $horadetermino = strtotime("+8 hours", strtotime($horaatual));
    $horadetermino = date(" H:i", $horadetermino); 
    $inserthours = mysqli_query($conexao, "INSERT INTO horario(horas) VALUES('$horadetermino')");
}


// date_default_timezone_set('America/Sao_Paulo');
// include_once('configDB.php');
// if(isset($_POST['horario'])){

//     $horas = $_POST['horas'];
    
//     $horaatual = date("H:i");
//     $dataatual = date("Y:m");
    
//     $horadetermino = strtotime("+$horas hours", strtotime($horaatual));
//     $horadetermino = date("H:i:s", $horadetermino);
//     $inserthours = mysqli_query($conexao, "INSERT INTO horario(horas) VALUES('$horadetermino')");
// }







?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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

        /* Header */
        .capa-home img {
            height: 500px;
            position: relative;
            left: 54%;
            bottom: 170px;
        }

        .mov-all {
            position: relative;
            left: 20%;
            top: 150px;
            width: 300px;
        }

        .titulo-1 h1 {
            font-size: 30px;
        }

        .button-capa button {
            width: 120px;
            height: 30px;
            border: 0px;
            border-radius: 10px;
            background-color: #ca0029;
            color: white;
            position: relative;
            top: 20px;
            cursor: pointer;
        }

        /* PAGE 2 */
        .bg-all {
            background-color: #fafafb;
            width: 1130px;
            margin-left: 355px;
            height: 700px;
        }

        .black-f {
            background-color: #ca0029;
            text-align: center;
            height: 80px;
            padding: 15px;
            width: 1100px;
            margin: auto;
        }

        .full-prod {
            display: flex;
            position: relative;
            left: 34px;

        }

        .full-prod-2 {
            margin-right: 20px;
        }

        .black-f1 {
            background-color: #ca0029;
            text-align: center;
            height: 80px;
            padding: 15px;
            width: 1100px;
            margin-left: 355px;
        }
        .black-f12 {
            background-color: #ca0029;
            text-align: center;
            height: 80px;
            padding: 15px;
            width: 1100px;
            
        }

        .prod-1 {
            background-color: #ffffff;
            border-radius: 10px;
            width: 250px;
            height: 500px;
            box-shadow: rgb(40 41 61 / 8%) 0px 0px 1px, rgb(96 97 112 / 16%) 0px 0.5px 2px;
        }

        .img-bolo h3 {
            text-align: center;
            position: relative;
            top: 20px;
        }

        .img-bolo img {
            position: relative;
            top: 40px;
            left: 20px;
        }

        .texts {
            position: relative;
            left: 20px;
            top: 30px;
        }

        .texts h6 {
            position: relative;
            top: 30px;
            text-decoration: line-through;
        }

        .texts h4 {
            color: #ca0029;
        }

        .texts h5 {
            position: relative;
            bottom: 25px;
        }

        .btn-prod button {
            border-radius: 10px;
            background-color: #ca0029;
            color: white;
            border: 0px;
            position: relative;
            left: 50px;
            top: 45px;
            width: 150px;
            cursor: pointer;
        }

        .valores {
            position: relative;
            left: 20px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 1130px;
            position: relative;
            left: 355px;

        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

       

        .pedidos button {
            position: relative;
            left: 300px;
        }

        #coment {
            position: relative;
            left: 355px;
            top: 30px;
        }

        .btn-coment {
            position: relative;
            left: 750px;
            bottom: 27px;
        }

        footer {
            background-color: #ca0029;
            height: 400px;
        }

        .map {
            position: relative;
            left: 700px;
            top: 50px;
        }

        footer h3 {
            position: relative;
            left: 800px;
            top: 30px;
            width: 200px;
        }

        #estado {
            position: relative;
            bottom: 130px;
            left: 30px;
        }
        .img-serviços img{
            width: 260px;
            border-radius: 10px;
            position: relative;
            left: 35px;
            top: 190px;
        }
        html {
            scroll-behavior: smooth;
        }
   
        h3 {
            text-align: center;
            color: green;
        }
       
    </style>
</head>

<body>
    <header>
        <div>
            <!-- div que movimenta tudo -->
            <div class="logo">
                <a href="sistema.php"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="link-header">
                <a href="sistema.php">Home</a>
                <a href="#servicos">Serviços</a>
                <a href="">Quem Somos</a>
                <a href="">Contatos</a>

            </div>
            <div class="login-header">
                <a href="sistema.php"><button>Sair da Conta</button></a>
            </div>
        </div>
    </header>
    <h3>PEDIDO FEITO COM SUCESSO!</h3>
    <table id="paginas">
            <tr>

                <th>Tipo de Bolo</th>
                <th>Andares</th>
                <th>Ingredientes</th>
                <th>Preço</th>

            </tr>
           
    <?php
                    while ($user_data = mysqli_fetch_assoc($resultlist)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['tipo_bolo'] . "</td>";
                        echo "<td>" . $user_data['andares'] . "</td>";
                        echo "<td>" . $user_data['ingredientes'] . "</td>";
                        echo "<td>" . $user_data['preco'] . "</td>";
                       
                
                        
                    }
                ?>
                <tr>
                    <td>
                        <b>HORA DO PEDIDO: <?php  echo  $horaatual; ?></b>
                    </td>
                    <td>
                        <b>TEMPO DE PRODUÇÃO: 8 HORAS</b>
                    </td>
                    <td>
                        <b>FICA PRONTO: <?php echo $horadetermino; ?></b>
                    </td>
                
                </tr>
            
            </body>

</html>