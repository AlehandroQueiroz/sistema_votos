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

        <div>
            <h2>Relatorio de Votação</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">None</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Cod_Candidato</th>
                        <th scope="col">Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($ele)): ?>
                    <?php foreach ($ele as $e) : ?>
                        <tr>
                            <td><?php echo $e->id ?></td>
                            <td><?php echo $e->nome ?></td>
                            <td><?php echo $e->cpf ?></td>
                            <td><?php echo $e->idade ?></td>
                            <td><?php echo $e->cod_candidato ?></td>
                            <td><?php echo $e->created_at ?></td>
                        </tr>
                    <?php endforeach;  endif;?>
                </tbody>
            </table>
            <div style="display:flex; align-items: flex-end; flex-direction: column">
                <h4>Total de votos <?php echo $count?></h4>
            </div>
            <a href="http://localhost/sistema_de_votos/">Voltar</a>
        </div>

    </div>


    <script src="assest/js/bootstrap.bundle.min.js"></script>
</body>

</html>