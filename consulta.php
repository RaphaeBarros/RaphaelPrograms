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

    <meta charset="utf-8">
    <title>Sistema WMS</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">

</head>

<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <li><a href="index.php">Entrada</a></li>
                <li class="active"><a href="">Consultas</a></li>
                <li><a href="movimentacao.php">Movimentação</a></li>
                <li><a href="saida.php">Saída</a></li>
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
            <br><br>

            <?php  echo "$registros registros encontrados."; ?>;

            <br><br>

            <table border="1">

                <!-- Cabeçalho da tabela -->
                <thead class="thead-light responsive-table centered">
                    <tr>
                        <th>UD</th>
                        <th>NF</th>
                        <th>RUA</th>
                        <th>BAIA</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>

                <!-- Corpo da tabela -->
                <tbody>
                    <?php
                        while ($exibirRegistros = mysqli_fetch_array($consulta)) {
                            
                            $ud = $exibirRegistros[2];
                            $nf = $exibirRegistros[1];
                            $rua = $exibirRegistros[3];
                            $baia = $exibirRegistros[4];
                    ?>

                        <tr>
                            <td><?= $ud ?></td>
                            <td><?= $nf ?></td>
                            <td><?= $rua?></td>
                            <td><?= $baia ?></td>
                            <th>
                                <form name="alterar" action="alterar.php" method="post">
                                    <input type="hidden" name="id" value="<?= $ud["id"] ?>">
                                    <input type="hidden" name="rua" value="<?= $rua ?>">
                                    <input type="hidden" name="baia" value="<?= $baia ?>">
                                    <input type="submit" name="editar" value="Editar">
                                </form>
                            </th>
                            <th>
                                <form name="excluir" action="conexao.php" method="post">
                                    <input type="hidden" name="id" value="<?= $pessoa["id"] ?>">
                                    <input type="hidden" name="acao" value="excluir">
                                    <input type="submit" name="excluit" value="Excluir">
                                </form>
                            </th>
                        </tr>
                    <?php }
                    ?>
                </tbody>

            </table>

            <?php

                mysqli_close($conexao);

            ?>

        </selection>
    </div>
</body>

</html>