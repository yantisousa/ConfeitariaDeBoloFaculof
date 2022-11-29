<?php
include_once('configDB.php');
if(isset($_POST['submit-coment'])){

    $comentarios = $_POST['comentarios'];

    $selectComent = mysqli_query($conexao, "INSERT INTO dados_comentados(comentarios) VALUES ('$comentarios') ");
    
    $registro = "SELECT * FROM dados_comentados ORDER BY id DESC";
$resultComentget = $conexao->query($registro);
print_r($resultComentget);

}


?>