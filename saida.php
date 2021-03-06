<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";

$sql = "select * from wms_expresso.entrada_mat where ud like '$filtro'";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema WMS - Saídas</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <li><a href="index.php">Entrada</a></li>
                <li><a href="consulta.php">Consultas</a></li>
                <li><a href="movimentacao.php">Movimentação</a></li>
                <li class="active"><a href="">Saída</a></li>
            </ul>
        </nav>

        <selection>
            <h1>Saída de Material</h1>
            <hr><br><br>

            <form method="get" action="">
                
                Filtrar por UD
                <input type="text" name="filtro" class="campo" required autofocus>
                <input type="submit" value="Pesquisar" class="btn">
                
            </form>

            <?php

                echo "<br>";
                echo "$registros registro(s) encontrado(s).";

                echo "<br><br>";

                while ($exibirRegistros = mysqli_fetch_array($consulta)) {

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