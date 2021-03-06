<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema WMS</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">

</head>

<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <li class="active"><a href="index.php">Entrada</a></li>
                <li><a href="consulta.php">Consultas</a></li>
                <li><a href="movimentacao.php">Movimentação</a></li>
                <li><a href="saida.php">Saída</a></li>
            </ul>
        </nav>

        <selection>
            <h1>Entrada de Materiais</h1>
            <hr><br><br>

            <form method="post" action="processa.php">

                UD<br>
                <input type="text" name="ud" class="campo" maxlength="50" required autofocus>
                <br></br>
                
                NF<br>
                <input type="text" name="nf" class="campo" maxlength="10" required>
                <br><br>

                RUA<br>
                <input type="text" name="rua" class="campo" maxlength="50" required>
                <br><br>

                BAIA<br>
                <input type="text" name="baia" class="campo" maxlength="50" required>
                <br><br>    
                
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn">
                <br><br>

            </form>
        </selection>
    </div>
    
</body>

</html>