<?php

include_once("conexao.php");

// $ud = $_POST["ud"];
$rua = $_POST["rua"];
$baia = $_POST["baia"];

$sql = "UPDATE wms_expresso.entrada_mat SET RUA=$rua, BAIA=$baia";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sistema WMS - Alterar</title>
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
            <h1>Alterar</h1>
            <hr><br><br>

        </selection>

        <form action="conexao.php" method="post">
            <table>
                <tbody>
                    <tr>
                        <td>Rua: </td>
                        <td><input type="text" name="rua" value="<?= $rua ?>" size="15"></td>
                    </tr>
                    <tr>
                        <td>Baia: </td>
                        <td><input type="text" name="baia" value="<?= $baia ?>" size="15"></td>
                    </tr>

                    <tr>
                        <td><input type="hidden" name="acao" value="alterar">
                            <input type="hidden" name="ud" value="<?= $ud ?>">
                        </td>
                        <td><input type="submit" name="Enviar" value="Enviar"></td>
                    </tr>
                </tbody>
            </table>
        </form>

    </div>
</body>

</html>