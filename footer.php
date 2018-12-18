<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main>



  <footer class="page-footer grey darken-4">
    <div class="container hide">

      <div class="row">

        <div class="col s12 m2">
            Home
        </div>

        <div class="col s12 m2">
            Entradas
        </div>

        <div class="col s12 m3">
            Política y privacidad
        </div>

        <div class="col s12 m2">
            Publicidad
        </div>

        <div class="col s12 m2">
            Suscíbete
        </div>
 


      </div>
    </div>


    <div class="footer-copyright center">
      <div class="container">
      <a  class="white-text" href="#">© Trends News 2018 - Diseñado y Comercializado por COMM Media Network S.A.S</a>
      </div>
    </div>
  </footer>

    <!--  Scripts-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>


    <?php wp_footer();
    ?>

    </body>

    </html>