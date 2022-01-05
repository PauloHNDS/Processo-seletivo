<?php 

    function gerarArray() {
        $arrayNumbers = [];
        for ($i=0; $i <= 20 ; $i++) { 
            $arrayNumbers[] = rand(1,10);
        }

        return $arrayNumbers;
    }

    function mostrarArray($array){
        $arrayString = '';
        foreach ($array as $key => $value) {
            if ($key == 0) {
                $arrayString .= $value; 
            } else {
                $arrayString .= ' , ' . $value;
            }
        }
        return "Array sorteado = [{$arrayString}].";
    }

    function verificarArray($array) {

        $respostaPronta = '';

        $arrayNovo = array_count_values($array);
        $resposta = [];

        foreach ($arrayNovo as $key => $value) {
            if ($value == 1) {
                $resposta[] = $key;
            }
        }
        foreach ($resposta as $key => $value) {
            if($key == 0) {
                $respostaPronta .= $value;  
            } else {
                $respostaPronta .= ' , ' . $value;
            }
        }
        return "Os numeros que não repetem são {$respostaPronta}.";
    }

    $array = gerarArray();
    $arrayVerificado = array_count_values($array);
    echo mostrarArray($array);
    echo "<br>";
    print_r(verificarArray($array));


?>