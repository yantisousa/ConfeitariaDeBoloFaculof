<?php
if(isset($_GET['bolo'])){

    include_once('../configDB.php');

    $tipo3 = 'Bolo de Casamento';
    $andares = $_GET['andares'];
    $ingredientes = $_GET['ingredientes'];


    $go = mysqli_query($conexao, "INSERT INTO dados_inseridos(tipo_bolo, andares, ingredientes)VALUES ('$tipo3', '$andares', '$ingredientes')");
}

?>