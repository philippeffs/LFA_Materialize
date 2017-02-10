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
      Made by <a class="brown-text text-lighten-3" href="#">Maurício Vasconcelos e Philippe Fernandes </a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.2.min.js"></script>
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
    $('.materialboxed').materialbox();
  });
      
        
</script>
  
