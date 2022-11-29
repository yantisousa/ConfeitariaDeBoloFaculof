<?php

if(isset($_POST['Save'])){

$ingredientes_edit = $_POST['ingredientes_edit'];

$editar = "UPDATE dados_inseridos SET ingredientes= '$ingredientes1'";

$remember1 = $conexao->query($editar);
header('Location: sistema.php');
}

?>