<!DOCTYPE html>
<html lang="en">
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
</head>
<body>
    <!-- TOPO-->
<div class="container-fluid pl-0 pr-0">
    <div class="row">
        <div class="col-sm pt-3 ml-5"> <p  class="logo-top p-1"><a href="index.php" style="text-decoration: none; color:black;">Full Stack Eletronicos</a></p></div>
        <div class="col-sm">
         <nav class="navbar  navbar-expand-lg navbar-light bg-light pl-1 pr-1">
             
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarText">
               <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                   <a href="produtos.php"class="nav-link  bg-primary text-white font-weight-bold navbar-item " href="#">Produtos<span class="sr-only"></span></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link bg-primary text-white  font-weight-bold navbar-item" href="nossaslojas.php">Nossas Lojas</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link bg-primary  text-white font-weight-bold navbar-item"  href="contato.php">Contato</a>
                 </li>
               </ul>
              
             </div>
           </nav>
        </div>
        <div class="col-sm pr-0"style="width:400px;">
         <nav class="navbar navbar-light bg-light pr-0" style="width:400px;">
             <form class="form-inline">
               <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
               <div class="btn-group dropleft">
                   <button class="btn btn-outline-primary ml-2 dropdown-toggle"data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</button>
                   <div class="dropdown-menu" style="top:60px;">
                    <form class="px-4 py-3">
                      <div class="form-group">
                        <label for="exampleDropdownFormEmail1" class="">Usuário</label>
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
                            Relembrar-me
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
<hr>

    <main class="container">     
        <div class="row">
            <div class="col d-flex align-items-center">
              <div class="jumbotron pt-1 pb-1">
                <h4 class="display-4" style="font-size:2.3rem;">As melhores ofertas você só encontra aqui! Faça parte da nossa Família.</h4>
            </div>
            </div>
            <div class="col-6 ">
                <div class="jumbotron pt-1 pb-1">
                    <h4 class="display-4" style="font-size:2.3rem;">Seja bem vindo à nossa Loja!</h4>
                </div>
                <hr>
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="_imagens/_slider/monitor-lgSlider.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="_imagens/_slider/Ram1Slider.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="_imagens/_slider/teclado1Slider.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                         
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div class="col">
              
            </div>
            
        </div>
            
    </main>
<hr>
  <!-- FOOTER-->
  <div class="row">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-sm"></div>
            <div class="col-sm text-center">
                <p class="bg-primary text-white">made with  by &#x1F596; Pablo Oliveira Mesquita </p>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>
 </div>
</body>
</html>