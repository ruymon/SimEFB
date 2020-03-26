

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>API AISWEB</title>

    <!-- Vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

    <!-- Shamcey CSS -->
    <link rel="stylesheet" href="../css/shamcey.css">
  </head>

  <body>

    <div class="sh-logopanel">
      <img src="https://static.aisweb.decea.gov.br/assets/_img/logo-pt-br.png" height="60px" width="180px">
      <a id="navicon" href="/img/api.png" class="sh-navicon d-none d-xl-block"><i class="icon ion-navicon"></i></a>
      <a id="naviconMobile" href="" class="sh-navicon d-xl-none"><i class="icon ion-navicon"></i></a>
    </div><!-- sh-logopanel -->

    <div class="sh-sideleft-menu">
      <label class="sh-sidebar-label">Navigation</label>
      <ul class="nav">
        <li class="nav-item">
          <a href="index.html" class="nav-link">
            <i class="icon ion-ios-home-outline"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- nav-item -->
        
    
        
    </div><!-- sh-sideleft-menu -->

    <div class="sh-headpanel">

      
      <div class="sh-headpanel-left">

        



      </div><!-- sh-headpanel-left -->

      <div class="sh-headpanel-right">
        
        
        
      </div><!-- sh-headpanel-right -->
    </div><!-- sh-headpanel -->

    <div class="sh-mainpanel">
      <div class="sh-breadcrumb">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="index.html">AISWEB</a>
          <a class="breadcrumb-item" href="index.html">API</a>
          <span class="breadcrumb-item active">TESTE</span>
        </nav>
      </div><!-- sh-breadcrumb -->
    

      <div class="sh-pagetitle">
        <div class="input-group">
          <input type="search" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn"><i class="fa fa-search"></i></button>
          </span><!-- input-group-btn -->
        </div><!-- input-group -->
        <div class="sh-pagetitle-left">
          <div class="sh-aisweb-icon"><img src="https://www.aisweb.aer.mil.br/assets/templates/portal/img/logos/bt_api.png"height="80px"></div>
          <div class="sh-pagetitle-title">
            <span> </span>
            <h2></h2>
          </div><!-- sh-pagetitle-left-title -->
        </div><!-- sh-pagetitle-left -->
      </div><!-- sh-pagetitle -->

      <div class="sh-pagebody">
        <!-- content goes here -->

      <h1>CARTAS</h1>
      
      <b> 
          
        <?php

          //API details
          include 'key.php';
    
    
      
            //CHARTS

            $content = file_get_contents("http://www.aisweb.aer.mil.br/api/?apiKey={$API_KEY}&apiPass={$API_PASS}&area=cartas");
              
              echo $content
        
       ?>

      </b>

  

      



      </div><!-- sh-pagebody -->
    </div><!-- sh-mainpanel -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>

    <script src="../js/shamcey.js"></script>
  </body>
</html>


