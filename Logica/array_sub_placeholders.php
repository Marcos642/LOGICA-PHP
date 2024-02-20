<?php
    $template = <<<HTML
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <p>Nome {{nome}}</p>
            <p>CPF {{cpf}}</p>
        </body>
        </html>
    HTML;

    $sub = [
        "nome" => "Marcos",
        "cpf" => "000.000.000"
    ];

    $key = array_keys($sub);
    $key = array_map(function($val){
        return "{{".$val."}}";
    },$key);

   echo str_replace($key,array_values($sub),$template);