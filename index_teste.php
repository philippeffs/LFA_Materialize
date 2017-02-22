<!--cabeçalho-->
<?php require('header.php'); ?>

<body>

<!--navbar-->
<?php require('navbar.php'); ?>

<!--Conteúdo da página-->




     <div class="hero"> 

     <div id="random">
          <div style="background-image: url(images/banner1.jpg)"></div>
          <div style="background-image: url(img/banner2.jpg)"></div> 
          <div style="background-image: url(img/banner3.jpg)"></div>                   
          <div style="background-image: url(img/banner4.jpg)"></div>
      </div>
    </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="skippr/js/jquery.skippr.js"></script>
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
