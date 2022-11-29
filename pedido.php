<?php
date_default_timezone_set('America/Sao_Paulo');
include_once('configDB.php');
if(isset($_POST['horario'])){

    $horas = $_POST['horas'];
    $horaatual = date("d-m-Y H:i:s");
    echo $horaatual . "<br>";
    $horadetermino = strtotime("+$horas hours", strtotime($horaatual));
    $horadetermino = date("Y-m-d H:i:s", $horadetermino);
    echo $horadetermino;   
    $inserthours = mysqli_query($conexao, "INSERT INTO horario(horas) VALUES('$horadetermino')");
}


?>
