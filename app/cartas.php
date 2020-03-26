
<!DOCTYPE html>
<html lang="pt-BR">

  <!--Includes Default Header -->
    <?php
      include 'include/head.php';
    ?>

<body>
  <!-- Includes NAV BAR -->
    <?php
      include 'include/nav.php';
    ?>

<!-- PAGE START -->

<div class="sh-pagebody">
        <!-- content goes here -->

    <h1>CARTAS</h1>
      
      <b> 
          
          <?php

              //*
              //Includes API Details
              include 'config/aisweb_key.php';

              //AISWEB Charts
              // Get Info from API
              $content = file_get_contents("http://www.aisweb.aer.mil.br/api/?apiKey={$AW_API_KEY}&apiPass={$AW_API_PASS}&area=cartas");
              //Display API info.
              echo $content
          ?>

      </b>

  

      



</div>
</div><!-- PAGE END-->

    <?php

        include 'include/script.php';

    ?>
    
  </body>
</html>


