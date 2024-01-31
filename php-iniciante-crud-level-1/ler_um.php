<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Ler um Registro - Tutorial PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <div class="page-header">
        <h1>Ler Produto</h1>
        <div class="borda">

        <?php
        if (isset($_GET['id'])) {
            // O parâmetro 'id' está presente na URL
            $id = $_GET['id'];
            echo "Presente na url";
            // Pode-se realizar processamento adicional ou ações com $id
        } else {
            echo "Não está presente na url.";
            // O parâmetro 'id' não está presente na URL
            // Lidar com o caso em que 'id' não é fornecido
        }
        include 'bancodedados.php';
        try {
           
            $query =  " select id nome,descricao,preco from produtos where  id=? limit 1;";
        }
        catch (PDOException 
        $exception;){
            die("Não está presente na url.".$exception->getMessage());
        }
        ?>
        
    </div>
</div>

</body>
    <script >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </script>
</html>