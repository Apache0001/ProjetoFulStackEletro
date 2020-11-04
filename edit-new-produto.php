<?php
    require_once "Conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body class="">
    <?php 
        $codigo_produto = $_GET['cod'];
        $busca = $conn->query("SELECT * FROM produtos WHERE id_produto='$codigo_produto'");

        if(!$busca){
            echo "BUSCA FALHOU!";
        }
        else{
            if($busca->num_rows == 1){
                $reg = $busca->fetch_object();

            }
        }
    
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                <table>
                    <tr><td><img src="<?php echo"_imagens/produtos/".$reg->img_produto ;?>" alt=""></td><td>Nome: <?php echo $reg->nome_produto ;?></td></tr>
                    <tr><td colspan="2">Descricao: <?php echo $reg->descricao; ?></td><td></td></tr>
                </table>
            </div>
            <div class="col-6">
                
                <form action="edit-produto.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <h2>EDITAR Produtos</h2>
                            <input type="text" name="edit-nome-produto" class="form-control" id="formGroupExampleInput" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <input type="text" name="edit-preco-produto" class="form-control" id="formGroupExampleInput2" placeholder="Preço: <?php echo$reg->preco?>">
                        </div>
                        <div class="form-group">
                            <input type="file" name="arquivo" class="form-control" id="formGroupExampleInput2" placeholder="Imagem">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="edit-descricao-produto" id="formGroupExampleInput2" placeholder="Descricao"></textarea>
                        </div>
                        <input type="submit" name="enviar-formulario">
                        
                    </form>
            </div>
            
        </div>
    </div>
    
</body>
</html>