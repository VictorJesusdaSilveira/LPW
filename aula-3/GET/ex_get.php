<?php

if(isset($_GET["num1"]) && isset($_GET["num2"])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    $soma = $num1 + $num2;

    $subtracao = $num1 - $num2;

    $multiplicacao = $num1 * $num2;

    $divisao = $num1 / $num2;

    $resto = $num1 % $num2;


    print "Soma: " . $soma . "<br>";

    print "Subtração: " . $subtracao . "<br>";

    print "Multiplicação: " . $multiplicacao . "<br>";

    print "Divisão: " . $divisao . "<br>";

    print "Resto: " . $resto;

}else{
    print "Informe o valor dos parâmetros [num1] e [num2]";
}

//ex_get.php?num1=5&num2=5







