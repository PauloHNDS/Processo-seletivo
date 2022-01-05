<?php 

    function exibirArray($numerosArray) {
        
        $numeros = '';
        for ($i=0; $i < count($numerosArray) ; $i++) {
    
                if ($i == count($numerosArray)) {
                    $numeros = $numeros . $numerosArray[$i]; 
                } elseif($i == 0) {
                    $numeros = $numeros . $numerosArray[$i]; 
                } else {
                    $numeros = $numeros .", ". $numerosArray[$i]; 
                }
            }
        
        return "Encontrados {$i} primos, são eles {$numeros}.";
    }

    function primo($inicial, $final) {
        $numerosArray = [];
        $numerosEncontrados = 0;
        for ($i=$inicial; $i < $final ; $i++) { 
            if($i % 2 === 1) {
                $numerosArray[] = $i;
                $numerosEncontrados++;
            }
        }

        return $numerosArray;
    }

    print_r(primo(10,29));

    $array = primo(10,29);

    echo "<br>";

    echo exibirArray($array);