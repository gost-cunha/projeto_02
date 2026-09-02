<?php
$fileName = "lista_chamadas.txt";

function gravarAluno($sala, $nome, $ra) {
    global $fileName;
    
    file_put_contents($fileName, "Sala do Aluno: " . $sala . "\n", FILE_APPEND);
    file_put_contents($fileName, "Nome do aluno: " . $nome . "\n", FILE_APPEND);
    file_put_contents($fileName, "RA do aluno: " . $ra . "\n", FILE_APPEND);
    file_put_contents($fileName, "___________________________" . "\n", FILE_APPEND);
}

function listarAlunos($f) {
    if (!$f) return false;
    
    $line = fgets($f);
    while ($line !== false) {
        echo "$line <br>";
        $line = fgets($f);
    }
    
    return true;
}


?>