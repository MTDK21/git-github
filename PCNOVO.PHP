<?php

$sexo = $_GET['sexo'];
$frutas = ['banana', 'maçã', 'laranja', 'uva', 'abacaxi'];
$nomez = $_GET['nome'];
$idadez = $_GET['idade'];

$pessoa =  ['nome'=>$nomez, 'idade'=>$idadez];

foreach ($pessoa as $key => $value) {
    echo "$key: $value <br>";
}

// ADICIONAR ELEMENTOS AO VETOR NUMÉRICO
$frutas[5] = 'kiwi';
$frutas[] = "morango";
array_push($frutas, 'melancia', 'cabelinho de anjo');
$pessoa['sexo']= $sexo;