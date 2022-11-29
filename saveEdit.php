<?php

include_once('configDB.php');
if(isset($_POST['update-save'])){
    $id = $_POST['id'];
    $andares = $_POST['andares'];
    $ingredientes = $_POST['ingredientes'];

    $sqlUpdate = "UPDATE dados_inseridos SET andares='$andares' ,ingredientes='$ingredientes' WHERE id='$id'";
    $resultUpdate = $conexao->query($sqlUpdate);
    header('Location: sistema.php');
}


?>