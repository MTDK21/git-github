<?php
$frutas = ['banana', 'maçã', 'laranja', 'uva', 'abacaxi'];
$nomez = $_GET['nome'];
$explode= explode(' ', $nomez);





$pessoa =  ['nome'=>$explode[0], 'idade'=>$explode[1]];
$pessoa ['sexo']= $explode[2];



// ADICIONAR ELEMENTOS AO VETOR NUMÉRICO
$frutas[5] = 'kiwi';
$frutas[] = "morango";
array_push($frutas, 'melancia');


// Percorrer um vetor
foreach ($pessoa as $key => $value ) {
    echo "$key: $value  <br>";
    
}


// PARA ACESSAR ELEMENTOS ESPECIFICOS = echo $frutas[VALOR DO VETOR]; ex: echo $frutas[0];
// MODIFICAR ELEMENTOS ESPECIFICOS = $frutas[0] = 'pera'; O VALOR BANANA DO VETOR FRUTAS VAI SER MODIFICADO PARA PERA

// Array_unshift - Remove o primeiro elemento do vetor 
array_unshift($frutas);
// array_pop - Remove o ultimo elemento do vetor
array_pop($frutas);
//unset($frutas[0]); // Remove o primeiro elemento do vetor
unset($frutas[0]);

foreach ($frutas as $key => $value ) {
    echo "$key: $value  <br>";
}

$novosNomes= implode(' ', $frutas);
print_r($novosNomes); // Converte o vetor em uma string, separando os elementos por espaço