 <footer class="page-footer blue-grey darken-1">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
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
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>



<script>
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

    $(document).ready(function(){
        $("#demo1").slippry({

          slippryWrapper: '<div class="sy-box " />', // wrapper to wrap everything, including pager

          // options
          adaptiveHeight: false, // height of the sliders adapts to current slide
          captions: 'overlay', // Position: overlay, below, custom, false

          // pager
          pager: false,
          
          // controls
          controls: true,
          autoHover: true,

          // transitions
          transition: 'kenburns', // fade, horizontal, kenburns, false
          kenZoom: 140,
          speed: 2000 // time the transition takes (ms)



        });
    });

        
</script>
  
