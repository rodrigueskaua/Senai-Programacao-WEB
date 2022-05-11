<html>
    <head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    


<?php
include "config.php";
include "functions.php";


$email = $_GET['email'];
$cep = $_GET['cep'];
$rua = $_GET['rua'];
$bairro = $_GET['bairro'];
$faleconosco = $_GET['faleconosco'];

if(cadastro_contato($email) == 0){

$sql = "INSERT INTO contato (email,cep,rua,bairro,faleconosco) VALUES ('$email','$cep','$rua','$bairro','$faleconosco')";
$query = $mysqli->query($sql);
    echo "inserido";
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
      window.location.href="../index.php"
  } 
})
    </script>
<?php }

?>
</body>
</html>

