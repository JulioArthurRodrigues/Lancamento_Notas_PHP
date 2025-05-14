<?php

// $nome_da_variavel = $array [name_input]
$nome_aluno = $_POST['nome_aluno'];
$nota01 = $_POST['nota01'];
$nota02 = $_POST['nota02'];
$nota03 = $_POST['nota03'];

// Ponto (.) para concatenar

// Cálculo a média das notas
$media = ($nota01+$nota02+$nota03) / 3;

// Exibe o texto, "." é usado para concatenar a variável no texto a ser exibido
echo "aluno: ".$nome_aluno;
echo "<br>";
echo "sua média é: ".$media;

// Faz uma condição para aprovar, recuperar ou reprovar 
if ($media>5) 
{
    echo "Aprovado";
}

elseif ($media == 5) 
{
    echo "Recuperação";
}

else
{
    echo "Reprovado";
}
?>


