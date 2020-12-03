<?php

include_once ("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from wms_expresso.entrada_mat where ud like '$filtro'";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);



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
            <li class="active"><a href="index.php">Entrada</li>
            <li><a href="">Consultas</li>
            <li><a href="">Movimentação</li>
            <li><a href="">Saída</li>
        </ul>
    </nav>

    <selection>
        <h1>Consultas</h1>
        <hr><br><br>

        <form method="get" action="">
            Filtrar por UD
            <input type="text" name="filtro" class="campo" required autofocus>
            <input type="submit" value="Pesquisar" class="btn">
        </form>

        <?php

        echo "$registros registros encontrados.";

        echo "<br><br>";

        while($exibirRegistros = mysqli_fetch_array($consulta)){

            $ud = $exibirRegistros[2];
            $nf = $exibirRegistros[1];
            $rua = $exibirRegistros[3];
            $baia = $exibirRegistros[4];

            echo "<article>";

            echo "UD: $ud<br>";
            echo "NF: $nf<br>";
            echo "RUA: $rua<br>";
            echo "BAIA: $baia<br>";


            echo "</article>";

        }
        mysqli_close($conexao);


        ?>

    </selection>
</div>
</body>

</html>
