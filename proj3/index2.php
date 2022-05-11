<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container-fluid col-md-6 ">
        <form class="rol g-3" method="post" action="calcular.php" >

        

            <div class="col-md-12">
                <input name="num1" type="text" class="form-control" required id="num1" size="60" />
            </div>
            <div class="col-md-12">
                <input name="num2" type="text" class="form-control" required id="num2" size="60" />
            </div>

            <div class="col-md-12">
                <label for="escolha" class="form-label">Operação</label>
                <select class="form-control" name="escolha">
                    <option value="">-</option>
                    <option value="SOMA">SOMA</option>
                    <option value="SUBTRACAO">SUBTRAÇÃO</option>
                    <option value="MULTIPLICACAO">MULTIPLICAÇÃO</option>
                    <option value="DIVISAO">DIVISÃO</option>

                </select>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary botao">Calcular</button>
            </div>



        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>