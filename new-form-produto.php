<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullStack Eletrônicos</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="stylesheet" href="_css/estiloform.css">
    <link rel="stylesheet" href="_javascript/funcoes.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="_css/estiloIndex.css">
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
        }
    </style>
</head>
<?php
    require_once "Conexao.php";

    // COLOCANDO IMAGEM EM UMA PASTA ESPECIFICA
        
        if(isset($_POST['enviar-formulario'])){
            
            $nome_produto = $_POST['nome-produto'] ;
            $preco_produto = $_POST['preco-produto'] ;
            $descricao_produto = $_POST['descricao-produto'];
            
            $formatosPermitidos = array("png","jpeg","jpg","gif");
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
            $nome = pathinfo($_FILES['arquivo']['name'], PATHINFO_FILENAME);

            //VERIFICANDO SE A EXTENSÃO DO ARQUIVO É COMPATÍVEL
            if(in_array($extensao, $formatosPermitidos)){
               $pasta = "_imagens/produtos/";
               $temporario = $_FILES['arquivo']['tmp_name']; // CAMINHO PADRÃO
               $novoNome = uniqid().".$extensao"; //NOVO NOME(AUTOMATICO) PARA VARIÁVEL
                

               if(move_uploaded_file($temporario, $pasta.$novoNome)){
                   $mensagem = "Upload feito com sucesso!";
                   print($mensagem);
                   $q = "INSERT INTO produtos(nome_produto, descricao, preco, img_produto) VALUES('$nome_produto','$descricao_produto','$preco_produto','$novoNome')";
                    if($conn->query($q)){
                        echo"<h1>CADASTRO EFETUADO COM SUCESSO!</h1>";
                    }
                    else{
                        echo"<h1>erro!</h1>";
                    }

               }
               else{
                   $mensagem = "Erro! Não foi possível colocar imagem fazer o upload";
                   print($mensagem);
               }
            }
            else{
                echo"
                    <script>
                        alert('FORMATO NÃO PERMITIDO. Só aceitamos arquivos do tipo: png, jpeg, jpg, gif')
                    </script>";
            }

        }


?>
<body>
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <h2>Cadastros de Produtos</h2>
                <input type="text" name="nome-produto" class="form-control" id="formGroupExampleInput" placeholder="Nome do Produto">
            </div>
            <div class="form-group">
                <input type="text" name="preco-produto" class="form-control" id="formGroupExampleInput2" placeholder="Preço">
            </div>
            <div class="form-group">
                <input type="file" name="arquivo" class="form-control" id="formGroupExampleInput2" placeholder="Imagem">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="descricao-produto" id="formGroupExampleInput2" placeholder="descricao"></textarea>
            </div>
            <input type="submit" name="enviar-formulario">
            
        </form>
    </div>
</body>
</html>