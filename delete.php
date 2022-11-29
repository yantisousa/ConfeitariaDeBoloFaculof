<?php

include_once('configDB.php');

if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM dados_inseridos WHERE id='$id'";
    $resultSelect = $conexao->query($sqlSelect);

    if($resultSelect->num_rows > 0){
        $slqDelete = "DELETE FROM dados_inseridos WHERE id='$id'";
        $resultDelete = $conexao->query($slqDelete);
    }
    else
    {
        header('Location: sistema.php');
    }
}


?>