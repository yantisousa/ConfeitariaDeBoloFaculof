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
    $preco = "R$ 100,00";

    $resultInsert = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, 
        andares, ingredientes, preco)VALUES ('$tipo', '$andares', '$ingredientes', '$preco')");
}


if (isset($_POST['submit-casa'])) {

    include_once('configDB.php');

    $tipo = 'Bolo de Casamento';
    $andares = $_POST['andares-casa'];
    $ingredientes = $_POST['ingredientes-casa'];

    $preco = "R$ 190,90";

    $resultInsert = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, 
        andares, ingredientes, preco)VALUES ('$tipo', '$andares', '$ingredientes', '$preco')");
}


if (isset($_POST['submit-case'])) {

    include_once('configDB.php');

    $tipo = 'Bolo Caseiro';
    $andares = $_POST['andares-case'];
    $ingredientes = $_POST['ingredientes-case'];

    $preco = "R$ 70,90";

    $resultInsert = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, 
        andares, ingredientes, preco)VALUES ('$tipo', '$andares', '$ingredientes', '$preco')");
}
if (isset($_POST['submit-pote'])) {

    include_once('configDB.php');

    $tipo = 'Bolo de Pote';
    $andares = $_POST['andares-pote'];
    $ingredientes = $_POST['ingredientes-pote'];

    $preco = "R$ 7,90";

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

if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM dados_inseridos WHERE id='$id'";
    $resultSelect = $conexao->query($sqlSelect);

    if($resultSelect->num_rows > 0){
        $slqDelete = "DELETE FROM dados_inseridos WHERE id='$id'";
        $resultDelete = $conexao->query($slqDelete);
    }
}

header('Location: or.php');






?>