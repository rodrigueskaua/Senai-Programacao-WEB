<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php
    include "functions.php";
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


    if (cadastro_contato($email) == 0) {

        $sql = "INSERT INTO contato (nome, email, cpf, cep, rua, bairro, cidade, estado, situacao) VALUES ('$nome', '$email','$cpf','$cep','$rua','$bairro','$cidade','$estado','$situacao')";

        $query = $mysqli->query($sql);

        echo "funcionou";

    }else{ ?>
        <script language='javascript'>
            Swal.fire({
                title: 'Você gostaria de salvar as mudanças?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Salvar',
                denyButtonText: `Não salvar`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "../index.php"
                }
            })
        </script>
    <?php }

    ?>
</body>

</html>