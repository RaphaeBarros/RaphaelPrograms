<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "wms_expresso";

$conexao = mysqli_connect($host, $user, $password, $database);

if(!$conexao){
    echo "Falha na conexão com o Banco de Dados";
}

?>
