
<!DOCTYPE html>
<html lang="pt-BR">

  <!--Includes Default Header -->
    <?php
      include '../include/head.php';
    ?>

<body>
  <!-- Includes NAV BAR -->
    <?php
      include '../include/nav/nav.php';

      include '../include/nav/nav_aw.php';
    ?>

<!-- PAGE START -->

<div class="sh-pagebody">
        <!-- content goes here -->

    <h1>CARTAS</h1>
      
      <b> 
          
          <?php

              //*
              //Includes API Details
              include '../config/aisweb_key.php';

              //AISWEB Charts
              // Get Info from API
              $content = file_get_contents("http://www.aisweb.aer.mil.br/api/?apiKey={$AW_API_KEY}&apiPass={$AW_API_PASS}&area=cartas");
              //Display API info.
            $xml= new DOMDocument;
            $search = htmlspecialchars($_POST['search']); 
            $xml->load( "http://www.aisweb.aer.mil.br/api/?apiKey={$AW_API_KEY}&apiPass={$AW_API_PASS}&area=cartas&icaoCode={$search}" );

            if (!$xml) {
              echo "Erro ao abrir arquivo!";
              exit;
            }

          $ver = simplexml_import_dom($xml);

          foreach ($ver as $valor) {
          echo $valor->item->id;
          echo "<br>";
          echo $valor->item->epecie;
          echo "<br>";
          echo $valor->item->tipo;
          echo "<br>";
          echo $valor->item->tipo_descr;
           echo "<br>";
          echo $valor->item->nome;
          echo "<br>";

          $pdf = "https://docs.google.com/viewer?url=http://ais.decea.gov.br/download/?arquivo={$valor->item->id}&amp;";
          echo $pdf;
          }
      ?>


      </b>

  

      



</div>
</div><!-- PAGE END-->

    <?php

        include '../include/script.php';

    ?>
    
  </body>

  <?php

include '../include/footer.php';

?>

</html>


