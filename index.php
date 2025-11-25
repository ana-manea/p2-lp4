<?php
require_once 'processamento/funcoesBD.php';

$jogos = verJogos('nome, ASC');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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

        <div class="verJogo">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço Normal</th>
                    <th>Preço Promocional</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($jogos = mysqli_fetch_assoc($jogos)): ?>
                    <tr>
                        <td><?php echo $jogos['nome']; ?></td>
                        <td>R$ <?php echo $jogos['precoNormal']; ?></td>
                        <td>R$ <?php echo $jogos['precoPromo']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>