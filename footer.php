   <footer class="page-footer blue-grey darken-1">
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l12">
            <h5 class="white-text">Laboratório de Ferrovias e Asfalto</h5>
            <p class="grey-text text-lighten-4">bla bla bla</p>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        <a class="brown-text text-lighten-3" href="#">© Copyright 2017. Laboratório de Ferrovias e Asfalto</a>
        <a class="brown-text text-lighten-3" href="#">Desenvolvido por Maurício Vasconcelos e Philippe Fernandes</a>
        </div>
      </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/slippry.min.js"></script>



  <script>

     $(document).ready(function(){ 
      $("#demo1").slippry({
        auto: true,
        transition: 'horizontal'

      });
    });

              $(document).ready(function(){
        $('.slider').slider({transition:800,interval:8000});
      });


      $( document ).ready(function() {
        $(".button-collapse").sideNav();
      });

      
      $('#mensagem').trigger('autoresize');

        $(document).ready(function() {
      $('input#input_text, textarea#mensagem').characterCounter();
    });

    
          
  </script>
    
