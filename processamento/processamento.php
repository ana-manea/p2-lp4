<?php
require_once 'funcoesBD.php';

if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];
    
    switch ($acao) {
        case 'cadastrar':
            $nome = $_POST['nome'];
            $precoNormal = $_POST['precoNormal'];
            $precoPromo = $_POST['precoPromo'];
    }
}
?>