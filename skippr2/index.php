<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Skippr. A jQuery plugin for creating tasteful slideshows.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/jquery.skippr.css">
        <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">
        <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196">
        <link rel="icon" type="image/png" href="favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="mstile-144x144.png">
        
        
        <link rel="stylesheet" href="css/style.css">
        
       
        
        
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<div class="navbar-fixed">
  <nav class="blue-grey darken-1 z-depth-4" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="" class="brand-logo">LABFA
        <img src="#">
      </a>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons ">menu</i></a>
  
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Página inicial</a></li>
        <li><a href="laboratorio.html">Laboratório</a></li>
        <li><a href="equipe.html">Equipe</a></li>
        <li><a href="lnpesquisa.html">Linhas de Pesquisa</a></li>
        <li><a href="public.html">Publicações</a></li>
        <li><a href="#">Parceiros</a></li>
        <li><a href="contato.html">Contato</a></li>
      </ul>
    </div>
      <ul id="nav-mobile" class="side-nav">
          <li class="bold"><a href="index.html" class="waves-effect waves-light waves-grey">Página inicial</a></li>
          <li><div class="divider"></div></li>
          <li class="bold"><a href="laboratorio.html" class="waves-effect waves-light waves-grey">Laboratório</a></li>
          <li><div class="divider"></div></li>
          <li class="bold"><a href="equipe.html" class="waves-effect waves-light waves-grey">Equipe</a></li>
          <li><div class="divider"></div></li>
          <li class="bold"><a href="lnpesquisa.html" class="waves-effect waves-light waves-grey">Linhas de Pesquisa</a></li>
          <li><div class="divider"></div></li>
          <li class="bold"><a href="public.html" class="waves-effect waves-light waves-grey">Publicações</a></li>
          <li><div class="divider"></div></li>
          <li class="bold"><a href="#!" class="waves-effect waves-light waves-grey">Parceiros</a></li>          
          <li><div class="divider"></div></li>
          <li class="bold"><a href="contato.html" class="waves-effect waves-light waves-grey">Contato</a></li>
      </ul>

  </nav>
</div>

        <div class="hero">
       
            <div id="random">
                
                <div style="background-image: url(img/banner1.jpg)"></div>
                <div style="background-image: url(img/banner2.jpg)"></div> 
                <div style="background-image: url(img/banner3.jpg)"></div>                   
                <div style="background-image: url(img/banner4.jpg)"></div>
            </div>
</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="skippr/js/jquery.skippr.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script>
            $(document).ready(function() {

                $("#random").skippr()({
                    navType: 'bubble',
                    autoPlay: true,
                    autoPlayDuration: 2000
                });


            });
        </script>
       
    </body>
</html>
