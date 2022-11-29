<?php
if(isset($_GET['bolo'])){

    include_once('../configDB.php');

    $tipo4 = 'Bolo de Pote';
    $andares = $_GET['andares'];
    $ingredientes = $_GET['ingredientes'];


    $go = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, andares, ingredientes)VALUES ('$tipo4', '$andares', '$ingredientes')");
}

?>