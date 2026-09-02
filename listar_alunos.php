<head>
</head>
<?php

require_once 'funcao.php';

$regFile = fopen($fileName, "r");

echo ("<h1>Segue a lista de presença registrada: </h1>");
echo "<hr>";
if (listarAlunos($regFile)) {
    fclose($regFile);
    echo "Fim da lista! <br>";

} else
    echo "Nenhuma lista de presença foi encontrada";

echo "<br>"; // Tralalelo Tralala + Tung Tung Da Silva

?>

<body>
    <hr>
    <p>2026. DEVs Davhcruz, Augusto.C++, Matias, Gabriel Machado, Gost</p>
</body>
