  <!--cabeçalho-->
  <?php require('header.php'); ?>

  <body>

  <!--navbar-->
  <?php require('navbar.php'); ?>

  <!--Conteúdo da página-->

      <div class="slide">
        <div class="slide_bloco">
          <ul id="demo1">
            <li>
            <a href="#slide1">
              <img src="images/Caroussel/banner1.jpg" class="responsive-img" alt="A histórica cidade de Ouro Preto <a href='#link'>Even with links!</a>"></a></li>
            <li>
            <a href="#slide2"><img src="images/Caroussel/banner2.jpg" class="responsive-img" alt="This is caption 2"></a></li>
            <li>
            <a href="#slide3"><img src="images/Caroussel/banner3.jpg" class="responsive-img" alt="Escola de Minas - UFOP"></a></li>
            <li>
            <a href="#slide4"><img src="images/Caroussel/banner4.jpg" class="responsive-img" alt="Escola de Minas - UFOP"></a></li>          
          </ul>
        </div>
      </div>

  <div class="container">
      <div class="section">
                <div class="row">
                <div class="col s12 m6 l6" >
                      <div class="card-panel blue-grey darken-1 hoverable">
                          <span class="white-text">Para perguntas, sugestões ou propostas de atuação, entre em contato com o nosso grupo.<br><br>
                          Laboratório de Ferrovias e Asfalto – Departamento de Engenharia Civil/Escola de Minas da UFOP<br>
                            Campus do Morro do Cruzeiro, SN , bairro Bauxita<br>
                            Ouro Preto -  Minas Gerais CEP: 35400-000<br>
                            Telefone: +55 (31) 3559-1112/ 97141-1690</span>
                        </div>
                      <div class="maps hoverable">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236.1667031131442!2d-43.50894912591769!3d-20.400066731285023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa40aec8c10fe17%3A0x5423e109dd4569c7!2sCampus+Morro+do+Cruzeiro!5e0!3m2!1spt-BR!2sbr!4v1486570739255"
                           width="430" height="400" style="border:0" allowfullscreen></iframe>
                      </div><br>
                </div>
                  <form class="col s12 m6 l6" action="mail_send.php" method="post" >
                        
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate" data-length="10">
                            <label for="icon_prefix">Nome</label>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Sobrenome</label>
                        </div>
                        <div class="input-field inline col s12 m12 l12">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="validate">
                            <label for="email" data-error="email inválido">Email</label>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">textsms</i>
                            <textarea id="mensagem" class="materialize-textarea" data-length="300"></textarea>
                            <label for="mensagem">Mensagem</label>
                        </div>
                      <button class="btn waves-effect waves-light blue-grey darken-1 valign-wrapper" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                      </button>
                  </form>
            </div>

      </div>


  </div>



   



  <!--rodapé-->
  <?php require ('footer.php'); ?>


  </body>
  </html>