<?php

include_once("conexao.php");

$ud = $_POST['ud'];
$nf = $_POST['nf'];
$rua = $_POST['rua'];
$baia = $_POST['baia'];

$sql = "insert into wms_expresso.entrada_mat (ud,nf,rua,baia) values ('$ud','$nf','$rua','$baia')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <title>Sistema WMS</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">

</head>

<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <li class="active"><a href="index.php">Entrada</a></li>
                <li><a href="">Consultas</a></li>
                <li><a href="">Movimentação</a></li>
                <li><a href="">Saída</a></li>
            </ul>
        </nav>
        <selection>
            <h1>Entrada de Materiais</h1>
            <hr><br><br>
            <?php

            if ($linhas == 1) {
                echo "Cadastro Realizado com Sucesso!";
            } else {
                echo "Erro, Verifique novamente as informações ou acione o TI";
            }

            ?>

        </selection>
    </div>
</body>

</html>