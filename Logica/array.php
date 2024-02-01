<?php
    // ARRAY 
    // EXITEM DUAS FORMAS DE DECLARAR ARRAY
            // $array1 = array(1,2,3,4,5);
    // E
            // $array2 = [1,2,3,4,5];
    
    // ACESSAR ARRAY
            //echo $array1[1];

    // FUNÇÕES DE MANIPULAÇÃO
    // EXISTEM VARIAS, TIPO: count(), array_push(), array_pop(), array_shift(), array_unshift(), array_merge(), etc.
            //echo count($array1);     // NUMERO DE ELEMENTOS
            //array_push($array1,6);   // ADD AO FINAL

    // LOOPS PARA PERCORRER ARRAY
            // foreach ($array1 as $key => $value) {
            //     echo "Indice: ".$key." Valor: ".$value;
            //     echo "<br>";
            // }

            // for($i = 0; $i < count($array1); $i++){
            //     echo $array1[$i];
            //     echo "<br>";
            // }

            // $val = count($array1);
            // $a = 0;
            // while ($a < $val) {
            //     echo $array1[$a];
            //     $a = $a + 1;
            //     echo "<br>";
            // }

    // ARRAY ASSOCIATIVO
            // $array3 = [
            //     "Marcos" => "20",
            //     "Tadeu" => "23"
            // ];
            // echo $array3["Marcos"];

    // ARRAY MULTIDIMENSIONAL
            // $array4 = [
            //     [1,2,3,4],
            //     [5,6,7,8],
            //     [9,10,11,12]
            // ];
            // echo $array4[1][2];
    // FUNÇÕES PARA ARRAY (ARRAY_MAP)
            // $dobro = array_map(function($valor){
            //     return $valor * 2;
            // },$array1);

            // foreach ($dobro as $value) {
            //     echo $value;
            // }
    // FUNÇÕES PARA ARRAY (ARRAY_KEYS)
            // $mais = [
            //     "Nome"=>"Marcos",
            //     "Iade"=>21
            // ];
            // $val = array_keys($mais);
    // FUNÇÃO PARA ARRA STR_REPLACE
            # DEFINIR A STRIG ORIGINAL
            $string = "Meu nome é {nome}, o dia está {condicao}";
            # ARRAY DE CHAVES A SEREM SUBSTITUIDAS    
            $keys = [
                "{nome}",
                "{condicao}"
            ];
            # ARRAY ASSOCIATIVO
            $assoc = [
                "{nome}"=>"Marcos",
                "{condicao}"=>"bonito"
            ];
            # SUBISTITUIÇÃO COM STR_REPLACE
            $replace = str_replace($keys,array_values($assoc),$string);
            echo $replace;

            // teste