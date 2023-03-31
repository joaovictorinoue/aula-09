<?php

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

echo "$nome - $cidade";

$arquivo = fopen("clientes.txt" , "a");

fwrite($arquivo, $nome . "\t");
fwrite($arquivo, $telefone . "\t");
fwrite($arquivo, $cep . "\t");
fwrite($arquivo, $rua . "\t");
fwrite($arquivo, $bairro . "\t");
fwrite($arquivo, $cidade . "\t");
fwrite($arquivo, $estado . "\n");
fclose($arquivo);

header("location:index.php");
?>