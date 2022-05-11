<!-- <html>
    <head>
        
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body> -->

<?php

include "config.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$situacao = $_POST['situacao'];


$sql = "INSERT INTO contato (nome, email, cpf, cep, rua, bairro, cidade, estado, situacao) VALUES ('$nome', '$email','$cpf','$cep','$rua','$bairro','$cidade','$estado','$situacao')";


$query = $mysqli->query($sql);

if($query){
    echo "Funcionou";
}else{
    echo "Não Funcionou";
}

?>




