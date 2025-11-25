<?php
require_once '../processamento/funcoesBD.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>ADS Store</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>ADS Store</h1>
            <nav class="menu-nav">
            <a href="view/cadastrar.php" class="btn-cadJogo">Cadastrar jogo</a>
            </nav>
        </div>

        <div class="formulario">
            <form action="../processamento/processamento.php" method="post">
            <label for="jogo">Informe o nome do jogo*</label>    
            <input type="text" name="jogo" id="jogo" required>
            <label for="precoN">Informe o preço original (R$)*</label>
            <input type="text" name="precoN" id="precoN" required>
            <label for="precoP">Informe o preço promocional (R$)*</label>
            <input type="text" name="precoP" id="precoP" required>
            <td class="acoes"><input type="submit" value="Inserir"> </td>
            </form>
        </div>
    </div>
</body>
</html>