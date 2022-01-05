<?php 

    function primo($inicial, $final) {
        $numerosArray = [];
        $numeros = '';
        $numerosEncontrados = 0;
        for ($i=$inicial; $i < $final ; $i++) { 
            if($i % 2 === 1) {
                $numerosArray[] = $i;
                $numerosEncontrados++;
            }
        }

        for ($i=0; $i < count($numerosArray) ; $i++) {
            if ($i == count($numerosArray)) {
                $numeros = $numeros . $numerosArray[$i]; 
            } elseif($i == 0) {
                $numeros = $numeros . $numerosArray[$i]; 
            } else {
                $numeros = $numeros .", ". $numerosArray[$i]; 
            }
        }
        
        return "Encontrados {$numerosEncontrados} primos, são eles {$numeros}.";
    }

    echo primo(10,29);