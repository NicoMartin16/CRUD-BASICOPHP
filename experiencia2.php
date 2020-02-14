<?php

$array = [
    'primerTrabajo' => [
        'Empresa' => 'BICTIA',
        'duracion' => '2 años'
    ],
    'segundoTrabajo' => [
        'Empresa' => 'WSS',
        'Duracion' => '4 años
        '
    ],
];

$numeros = [
    'primer' => ['2',5,7,8,4,3,3,8],
    'segundo' => [50,60,5,8,0,3,'9',2,8,8],
    'tercero' => [100,600,8,3,78,'90',5,77]
];
  

foreach ($numeros as $key => $valor) {
    $acum = 0;
    foreach ($valor as $numero) {
        if($numero == 8 || !is_int($numero)){
            $acum += 0;
        } else {
            $acum += $numero;
        }
    }
    echo "El total del $key arreglo es: $acum <br/>";
}

$data = '';
foreach ($array as $key => $value) {
    $data .= "$key => <br/> ";
    foreach ($value as $llave => $dato) {
        $data .= " $llave = $dato <br/> ";
    }

    $data .= "<br/>";
}
echo $data;
?>