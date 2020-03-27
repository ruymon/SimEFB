
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

    <h1>{AIRPORT_NAME}  - {CARTA_NAME}</h1>
      <br>



<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#view">Vizualizar</button>

  <!-- Modal -->
  <div class="modal fade" id="view" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">{NOME_CARTA}</h4>
        </div>
        <div class="modal-body">
        <iframe id="carta" src="http://ww1.jeppesen.com/documents/aviation/notices-alerts/chart-alert/SBGR/SBGRfiles.pdf"></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
    

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


