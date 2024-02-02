<?php
# html dentro de variavel
$htmlTEMPLATE = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nome: {{name}}</h1>
    <p>Descrição: {{description}}</p>
</body>
</html>
HTML;
// DADOS PARA SUBSTITUIR AS PLACEHOLDERS
$data = [
    "name"=>"John Doe",
    "description"=>"Lorem ipsum dolor sit amet."
];
# Pegar as chaves
$keys = array_keys($data);
# Mapear e modificar
$map = array_map(function($sub){
    return "{{".$sub."}}";
},$keys);
#Unir tudo
$replace = str_replace($map,array_values($data),$htmlTEMPLATE);
echo $replace;