<?php

$pessoas = [
    [
        "nome"=>"Renata", 
        "cidade"=>"Americana",
        "idade" => 35
    ],
    [
        "nome"=>"Alan", 
        "cidade"=>"Piracicaba",
        "idade" => 20
    ],
    [
        "nome"=>"Ingridi", 
        "cidade"=>"Americana",
        "idade" => 38
    ],
    [
        "nome"=>"Sara", 
        "cidade"=>"SBO",
        "idade" => 25
    ],
    [
        "nome"=>"Kleber", 
        "cidade"=>"SBO",
        "idade" => 22
    ]
];

$qtd = count($pessoas)-1;
$l = 0;

$arquivo = fopen("nomes.txt", "a");

  for ($row = 0; $row < $qtd; $row++) {
    fwrite($arquivo, $pessoas[$row]["nome"] . "\t");
    fwrite($arquivo, $pessoas[$row]["cidade"] . "\t");
    fwrite($arquivo, $pessoas[$row]["idade"] . "\n");
    
    // for ($col = 0; $col < 3; $col++) {
    //     fwrite($arquivo, $pessoas[$row][$col] . "\n");
    // }

  }
fclose($arquivo);
