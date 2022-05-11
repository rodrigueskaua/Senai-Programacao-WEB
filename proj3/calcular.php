<?php 

include "functions.php";

$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$escolha = $_POST['escolha'];

switch ($escolha) {
    case "SOMA":
        echo soma($n1,$n2);
        break;
    case "SUBTRACAO":
        echo subtracao($n1,$n2);
        break;
    case "MULTIPLICACAO":
        echo multi($n1,$n2);
        break;
    case "DIVISAO":
        echo divisao($n1,$n2);
            break;
 }
?>