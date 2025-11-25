<?php
function conectarBD() {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "loja";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if ($conexao) {
        $conexao = mysqli_close($conexao);
    }
}

function inserirJogo() {
    $conexao = conectarBD();

    $sql = "INSERT INTO `jogos`(`nome`, `precoNormal`, `precoPromo`) 
            VALUES ('nome = $nome, 
                    precoNormal = $preçoNormal,
                    precoPromo  =$precoPromo')";
}

function verJogos() {
    $conexao = conectarBD();

    $sql = "SELECT * FROM jogos"; 
    
    return $sql;
}
?>