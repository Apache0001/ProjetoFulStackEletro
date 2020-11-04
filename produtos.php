<?php
  require_once "Conexao.php";
  $cat = $_GET['cat'] ?? null;
  $chave = $_GET['chave'] ?? null;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullStack Eletrônicos</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="stylesheet" href="_css/estiloform.css">
    <link rel="stylesheet" href="_javascript/funcoes.js">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
          .content-item:hover .preco {
            background-color: red;
            color: white;
            font-weight: bold;
            transition: .3s;
          
          }
       .content-item:hover .nome-item{
          
          color:red;
          font-weight: bold;
      }

    </style>
</head>
<body>
   <!-- TOPO-->
<div class="container-fluid">
  <div class="row">
      <div class="col-sm pt-3 ml-5"> <p  class="logo-top p-1"><a href="index.php" style="text-decoration: none; color:black;">Full Stack Eletronicos</a></p></div>
      <div class="col-sm">
       <nav class="navbar navbar-expand-lg navbar-light bg-light pl-1 pr-1">
           
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarText">
             <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                 <a href="produtos.php"class="nav-link rounded bg-primary text-white font-weight-bold navbar-item " href="#">Produtos<span class="sr-only"></span></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link bg-primary text-white font-weight-bold navbar-item" href="nossaslojas.php">Nossas Lojas</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link bg-primary text-white font-weight-bold navbar-item"  href="contato.php">Contato</a>
               </li>
             </ul>
            
           </div>
         </nav>
      </div>
      <div class="col-sm">
       <nav class="navbar navbar-light bg-light">
           <form action="produtos.php" method="get" class="form-inline">
             <input class="form-control mr-sm-2" name="chave"type="search" placeholder="Nome do Produto" aria-label="Search">
             <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Procurar</button>
             <div class="btn-group dropleft">
                 <button class="btn btn-outline-primary ml-2 dropdown-toggle"data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</button>
                 <div class="dropdown-menu" style="top:60px;">
                  <form class="px-4 py-3">
                    <div class="form-group">
                      <label for="exampleDropdownFormEmail1">Usuário</label>
                      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                      <label for="exampleDropdownFormPassword1">Senha</label>
                      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Senha">
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                        <label class="form-check-label" for="dropdownCheck">
                          Remember me
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary text-center position-relative" style="left:75px;">Entrar</button>
                  </form>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">É novo aqui? Inscreva-se!</a>
                  <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                </div>
                  
                </div>
             </div>
           </form>
         </nav>
      </div>

  </div>
</div>
<!-- FIM TOPO-->
<!--  ########################################### MAIN  ##############################################-->
           <main class="container">
               <div class="row">
                   <div class="col-sm-auto">
                       <p class="text-center bg-secondary text-white categoria text-light bg-dark">Categorias</p>
                        <ul class="menu-categoria">
                          <form action="produtos.php" method="get">
                              <a href="produtos.php?cat=" style="text-decoration:none;"><li class="bg-primary  rounded-pill text-center categoria-item mb-1 pl-2 pr-2">Todos</li></a>
                              <a href="produtos.php?cat=Placa de Vídeo" style="text-decoration:none;"><li class="bg-primary  rounded-pill text-center categoria-item mb-1 pl-2 pr-2">Placa de Video</li></a>
                              <a href="produtos.php?cat=Mouse" style="text-decoration:none;"><li class="bg-primary rounded-pill text-center categoria-item mb-1 pl-2 pr-2">Mouse</li></a>
                              <a href="produtos.php?cat=HD" style="text-decoration:none;"><li class="bg-primary rounded-pill text-center categoria-item mb-1 pl-2 pr-2">HD</li></a>
                              <a href="produtos.php?cat=Monitor" style="text-decoration:none;"><li class="bg-primary rounded-pill text-center categoria-item mb-1 pl-2 pr-2"> Monitor</li></a>
                          </form>
                        </ul>
                   </div>
<!--  ########################################### EXIBIÇÃO PRODUTO  ##############################################-->                  
                   <div class="col-sm">
                        <div class="container">
                            <div class="row justify-content-sm-left text-center">
                              <?php 
                                if($cat != null){
                                  if($cat == 'todos'){
                                    $q = "SELECT * FROM produtos ";
                                  }
                                  else{
                                    $q = "SELECT * FROM produtos WHERE categoria = '$cat' ";
                                  }

                                }else{
                                  if($chave != null){
                                    $q = "SELECT * FROM produtos WHERE nome_produto like '%$chave%' ";
                                  }
                                  else{
                                    $q = "SELECT * FROM produtos ";
                                  }
                                }
                                

                                $busca = $conn->query($q);
                                if(!$busca){
                                  echo"BUSCA FALHOU";
                                }
                                else{
                                  if($busca->num_rows == 0){
                                    echo"Nenhum Registro Encontrado!";
                                  }
                                  else{
                                    while($reg = $busca->fetch_object()){
                                      echo"
                                      <div class='col-sm-auto m-3 content-item text-wrap'>;
                                          <img src='_imagens/produtos/$reg->img_produto' alt=''>
                                          <p class='nome-item text-wrap'>$reg->nome_produto</p>
                                          <a href='#'><i class='material-icons'> add_circle</i></a>
                                          <a href='edit-new-produto.php?cod=$reg->id_produto'><i class='material-icons'>edit</i></a>
                                          <i class='material-icons'>delete</i>

                                          <hr>
                                  
                                    
                                          <p class='preco'>R$: $reg->preco</p>
      
                                      </div>";
                                    }

                                  }
                                }
                                
                                ?>
                            </div>
                        </div>
                   </div>
               </div>
               </div>
           </main>
<!-- ######################################################## FOOTER ###############################-->
           <div class="row">
              <div class="container">
                  <div class="row justify-content-sm-center">
                      <div class="col-sm"></div>
                      <div class="col-sm text-center">
                          <p class="bg-primary text-white">made with  by &#x1F596; Pablo Oliveira Mesquita</p>
                      </div>
                      <div class="col-sm"></div>
                  </div>
              </div>
           </div>
     
</html>