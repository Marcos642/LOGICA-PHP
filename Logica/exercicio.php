<!-- LINK DOS EXERCÍCIOS: https://satellasoft.com/artigo/php/lista-de-exercicios-em-php -->

<!-- 1) - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". -->

<!-- <body>
    <form method="POST">
        <input type="text" placeholder="Digite um Numero" name="valor">
        <input type="submit" value="Enviar">
    </form>
</body> -->
<?php
// if(isset($_POST['valor'])){
//     $valor = $_POST['valor'];
//     if($valor > 0){
//         echo "O valor ".$valor." é positivo";
//     }else if($valor == 0){
//         echo "O valor ".$valor." é igual a zero";
//     }else{
//         echo "O valor ".$valor." é negativo";
//     }
// }

// 2) Crie um algoritmo que solicite a entrada de um número, e exiba a        tabuada de 0 a 10 de acordo com o número solicitado, ex: 
// Entrada = 4
// Saída = 4 X 0 = 0...4 X 10 = 40.
?>
<!-- <body>
    <form method="POST">
        <input type="text" placeholder="Digite um numero" name="num">
        <input type="submit">
    </form>
</body> -->
<?php
// if(isset($_POST['num'])){
//     $num = $_POST['num'];
//     for($i = 0;$i <= 10; $i++){
//         echo "<br>";
//         echo $i * $num;
//         echo "<br>";
//     }
// }
?>

<!-- 3) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6 -->

<!-- <body>
    <form method="POST">
        <input type="text" name="val" placeholder="Valor">
        <input type="submit" name="enviar">
    </form>
</body> -->

<?php
// if(isset($_POST['val'])){
//     $num = $_POST['val'];
//     if($num > 0){
//         $valor = $num;
//         for($i = ($valor - 1); $i > 0; $i--){
//           $valor = $valor * $i;
//         }
//     }else{
//         $valor = 0;
//     }
//     echo "!{$num} = {$valor}";
// }
?>

<!-- 4) Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão).
Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números.  -->
<?php
// $num1 = filter_input(INPUT_POST, 'numero1');
// $num2 = filter_input(INPUT_POST, 'numero2');
// $operacao = filter_input(INPUT_POST, 'operacao');
// $result = "";

// if($num1 && $num2){
//     switch ($operacao) {
//         case '+':
//             $operacao = $num1 + $num2;
//         break;
//         case '-':
//             $operacao = $num1 - $num2;
//         break;
//         case '*':
//             $operacao = $num1 * $num2;
//         break;
//         case '/':
//             $operacao = $num1 / $num2;
//         break;
//     }
// }
?>
<!-- <body>
    <?= $operacao ?>
    <form method="POST">
        <label>Numero 1:<input type="text" name="numero1"></label>
        <label>Numero 2:<input type="text" name="numero2"></label>
        <label>operação
            <select name="operacao">
                <option value="+">Adição</option>
                <option value="-">Subtração</option>
                <option value="*">multiplicação</option>
                <option value="/">Divisão</option>
            </select>
        </label>
        <input type="submit" name="btnCalcular" value="math">
    </form>
</body> -->

<!-- 5) Solicite a entrada de um número e descubra se um número digitado é par ou ímpar.  -->
<?php
// $num = 3;
// if($num % 2 == 0){
//     echo "Par";
// }else{
//     echo "Imp";
// }
?>
<!-- 6) Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5". -->
<?php
$A = 5; 
$B = 7;
if($A > $B){
    echo "{$A} {$B}";
}else{
    echo "{$B} {$A}";
}

// 7) Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.