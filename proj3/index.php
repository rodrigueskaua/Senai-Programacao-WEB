
<?php

// Questão 1
// $senha = 0;
// $resultado = "";
// if ($senha > 0){
//     $resultado = "Valor Positivo";
// }

// elseif($senha < 0){
//     $resultado = "Valor Negativo";
// }

// else{
//     $resultado = "Valor Igual a Zero";

// }

//     echo $resultado;


// Questão 2

// $num = 65445646545;

// for ($i = 1; $i <= 10; $i++) {
//     // echo $num + " X " + $i + " = " + $num * $i;
//     printf("%d X %d = %d <br>",$num, $i, $num * $i );
// }


// Questão 3

$num = random_int(1,100);
$num2 = random_int(1,100);

$resultado = ($num + $num2) * $num;

echo "<h1>".$resultado."</h1>";
printf("<h1>(%d + %d) * %d = %d",$num, $num2,$num, $resultado );

?>
<!-- <html>


<style>
    #text{
        font-size: 25px;
    }
</style>

</html> -->