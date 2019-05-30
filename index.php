<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Música para todos - Spotify</title>
<link rel="icon"  href="imagens/favicon.png">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

     <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
       <div class="container">  

        <!--header-->
        <div class="navbar-header">

         <!-- botão toggle -->
         <button type="button" class="navbar-toggle collapsed" cata-toggle="collapse" data-target="#barra-navegacao">
           <span class="sr-only">alternar navegação</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>

          <a href="index.html" class="navbar-brand">
           
            <span class="img-logo">Spotify</span>
          </a>
        </div>
        <!--navbar -->
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Premium</a></li>
            <li><a href="">Ajuda</a></li>
            <li><a href="">Baixar</a></li>
            <li><a href="">Inscrever-se</a></li>
            <li><a href="">Entrar</a></li>
            
          </ul>
        </div>
       </div><!--conteiner-->
     </nav><!--nav-->

    <div class="capa">
      <div class="texto-capa">
 <h1>Música para todos</h1>
 <a href="" class="btn btn-custom btn-roxo btn-lg">Aproveite o Spotify Free</a> 
  <a href="" class="btn btn-custom btn-branco btn-lg">Obter Spotify Premium</a> 
      </div>
    </div>
<!-- Conteudos -->
<section id="servicos" class="visible-xs-block visible-sm-block">
  <div class="conteiner">
      <div class="row">

        <!-- Albuns -->
        <div class="col-md-6" ">
          <div class="row albuns">

            <div class="col-md-6">
            <img src="imagens/img1.jpg" class="img-responsive">
            </div>
            <div class="col-md-6">
            <img src="imagens/img2.jpg" class="img-responsive">
            </div>
          </div><!--/row-->

           <div class="row albuns">

            <div class="col-md-6">
            <img src="imagens/img3.jpg" class="img-responsive">
            </div>
            <div class="col-md-6">
            <img src="imagens/img4.jpg" class="img-responsive">
            </div>
          </div><!--/row-->

       </div>

           <!--Servicos -->
        <div class="col-md-6" ">
          <h2>O que o Spotify tem?</h2>
          <h3>Músicas</h3>
          <p>O spotify tem milhoes de músicas.Escute seus sons favoritos, descubra  novas músicas e reúna seus favoritos em um só lugar.</p>
           
          <h3>Playlists</h3>
          <p>no Spotify voçê encontra uma playlist para cada momento. Todas feitas por fantáticos e especialistas da música.</p>

          <h3>Novos lançamentos</h3>
          <p>Escute os novos lam=nçamentos de singles e álbuns da semana e veja o que está bombando no Top 50.</p>
        </div>

      </div>
  </div>

</section>

<section id="recursos">
  <div class="conteiner">
    <div class="row">

      <!--Recursos -->
      <div class="col-md-4" ">
        <h2>Fácil </h2>

          <h3>Buscar</h3>
          <p>Já sabe o que quer escutar? É só procurar e apertar o play.</p>
           
          <h3>Navegador</h3>
          <p>Veja os novos lançamentos, o que está bombando.</p>

          <h3>Descobrir</h3>
          <p>Escute os novos lam=nçamentos de singles e álbuns da semana e veja o que está bombando no Top 50.</p>
      </div>

      <!--img Recursos -->
      <div class="col-md-8" ">
      <div class="row rotacionar ">

            <div class="col-md-6">
            <img src="imagens/iphone1.png" class="img-responsive">
            </div>

            <div class="col-md-6">
            <img src="imagens/iphone2.png" class="img-responsive">
            </div>
          </div><!--/row-->
      </div>

     </div>
  </div>
</section>

<!-- Rodapé -->
<footer id="rodape">

  <div class="conteiner">
      <div class="row">
       
        <div class="col-md-2">
          <span class="img-logo">Spotify</span>
        </div>
        <div class="col-md-2">
          <h4>Company</h4>
          <ul class="nav">
            <li><a href=""> Sobre</li>
            <li><a href="">Empregos</li>
            <li><a href="">Impresa</li>
            <li><a href="">Novidades</li>
          </ul>
        </div>
        <div class="col-md-2">
          <h4>Comunidades</h4>
          <ul class="nav">
            <li><a href=""> Artistas</li>
            <li><a href="">Desenvolvedores</li>
            <li><a href="">Marcas</li>
          </ul>
        </div>

        <div class="col-md-2">
          <h4>LINKS UTEIS</h4>
          <ul class="nav">
            <li><a href=""> Ajuda</li>
            <li><a href="">Presente </li>
            <li><a href="">Player da web</li>
          
          </ul>
        </div>
          <div class="col-md-4">
                
                <ul class="nav">
                  <li class="item-rede-social" ><a  href=""> <img src="imagens/facebook.png"></li>
                  <li class="item-rede-social"><a href=""><img src="imagens/twitter.png"> </li>
                  <li class="item-rede-social"><a href=""><img src="imagens/instagram.png"></li>
                
                </ul>
              </div>

      </div>
  </div>
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>