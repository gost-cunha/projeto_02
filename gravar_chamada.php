<?php
require_once "funcao.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $sala = $_POST['sala'];
    $nome = $_POST['nome'];
    $ra = $_POST['ra'];

    gravarAluno($sala, $nome, $ra);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravar Chamada</title>
    <style>
        .botao1{
            background-color: aqua;
        }
        .botao2{
            background-color: pink;
        }
    </style>
</head>

<body>
    <h1>Gravar Chamada</h1>
    <hr>
    <form action="index.php">
        <button>
            Voltar para Página inicial
        </button>
    </form>
    <br>
    <form action="listar_alunos.php">
        <button>Ver alunos listados</button>
    </form>
    <hr>
    <p class="rodape">2026. DEVs Davhcruz, Augusto.C++, Matias, Gabriel Machado, Gost</p>
</body>

</html>