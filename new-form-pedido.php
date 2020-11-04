<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
            justify-items: center;
        }
    </style>
</head>

<?php
    require_once "Conexao.php";
    // Se o formulário estiver configurado
    if(isset($_POST['enviar-pedido'])){
        $nome_cliente = $_POST['nome-cliente'];
        $endereco_cliente = $_POST['endereco-cliente'] ;
        $telefone_cliente = $_POST['telefone-cliente'] ;
        $nome_produto = $_POST['nome-produto'] ;
        $valor_unitario = $_POST['valor-unitario'] ;
        $quantidade = $_POST['quantidade'] ;
        $valor_total = $_POST['valor-total'] ;


        //String para envio no BANCO

        $q = "INSERT INTO pedidos(nome_cliente, endereco_cliente, telefone_cliente, nome_produto, valor_unitario, quantidade, valor_total) VALUES('$nome_cliente','$endereco_cliente','$telefone_cliente','$nome_produto','$valor_unitario','$quantidade','$valor_total')";
        // Envio para o Banco através do objeto conn.
        if(!$conn->query($q)){
            echo "ERRO AO CADASTRAR NO BANCO DE DADOS! ";
        }
        else{
            echo"
                <script>alert('Pedido Efetuado Com sucesso! ')</script>
            
            ";
        }

    }
?>

<!-- ################################ FORMULÁRIO DE PEDIDO ##############################-->
<body>
    <div class="container">
        <div class="div">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <h2>Cadastros de Pedidos</h2>
                <input type="text" name="nome-cliente" class="form-control" id="formGroupExampleInput" placeholder="Nome do Cliente">
            </div>
            <div class="form-group">
                <input type="text" name="endereco-cliente" class="form-control" id="formGroupExampleInput2" placeholder="Endereco">
            </div>
            <div class="form-group">
                <input type="text" name="telefone-cliente" class="form-control" id="formGroupExampleInput2" placeholder="Telefone">
            </div>
            <div class="form-group">
                <input type="text" name="nome-produto" class="form-control" id="formGroupExampleInput2" placeholder="Nome do Produto">
            </div>
            <div class="form-group">
                <input type="text" name="valor-unitario" class="form-control" id="formGroupExampleInput2" placeholder="Valor Unitario">
            </div>
            <div class="form-group">
                <input type="text" name="quantidade" class="form-control" id="formGroupExampleInput2" placeholder="Quantidade">
            </div>
            <div class="form-group">
                <input type="text" name="valor-total" class="form-control" id="formGroupExampleInput2" placeholder="Valor total">
            </div>
            <input type="submit" name="enviar-pedido">
            </form>
        </div>
    </div>
    
</body>
</html>