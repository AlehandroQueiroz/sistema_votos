<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
    <link rel="stylesheet" href="assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="assest/css/style.css">
</head>

<body class="bg-primary p-5">

    <div class="container border border-2  rounded-4 p-4 
bg-white" style="max-width: 700px;display: flex; align-items: center; flex-direction: column;">
        <?php if (!empty($_SESSION["Error"])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION["Error"]; ?>
            </div>
        <?php session_unset(); endif; ?>

        <form action="http://localhost/sistema_de_votos/home" method="POST" style="max-width: 400px;">

            <h1 class="mb-4 text-center fs-4">VOTAÇÃO</h1>
            <div>
                <div class="mb-2">
                    <label for="nome" class="form-label fw-bold">Nome do Eleitor</label>
                    <input type="text" name="nome" class="form-control 
        form-control-lg bg-ligth" required />
                </div>
            </div>

            <div>
                <div class="mb-2">
                    <label for="cpf" class="form-label fw-bold">CPF</label>
                    <input type="text" name="cpf" class="form-control
         form-control-lg bg-ligth" required>

                </div>
            </div>

            <div>
                <div class="mb-2">
                    <label for="idade" class="form-label fw-bold">Idade</label>
                    <input type="text" name="idade" class="form-control
         form-control-lg bg-ligth" required>

                </div>
            </div>

            <div>
                <div class="mb2">
                    <div class="box">
                        <img src="./assest/Bill-Gates-Getty.jpg" class="img" />
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cod_candidato" value="888" id="votacao2" />
                            <label for="votacao2" class="form-label fw-bold">Bill Gates</label>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="mb2">
                    <div class="box">
                        <img src="./assest/Mark_Zuckerberg.jpg" class="img" />
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cod_candidato" value="800" id="votacao1" />
                            <label for="votacao1" class="form-label fw-bold">Mark Zuckerberg</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-grid mb-4">
                <input type="submit" value="VOTAR" class="btn 
        btn-primary btn-lg">
            </div>
        </form>

        <a href="http://localhost/sistema_de_votos/result">Visualizar Relatório</a>


    </div>


    <script src="assest/js/bootstrap.bundle.min.js"></script>
</body>

</html>