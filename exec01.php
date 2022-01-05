<?php 

    function seculoAno($ano) {
        $seculo = $ano / 100;
        if(is_double($seculo)){
            $seculoINT = (int) $seculo + 1;
            return "Ano {$ano} = século {$seculoINT}"; 
        } else {
            return "Ano {$ano} = século {$seculo}"; 
        }
    }


    echo seculoAno(1905) . "<br>";
    echo seculoAno(1700) . "<br>";

    