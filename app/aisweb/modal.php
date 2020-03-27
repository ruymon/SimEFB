<!DOCTYPE html>
<html>

<head>

<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon" href="/simefb/img/simefb_logo.png" />
    

    <!-- Meta -->
    <meta name="simefb" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="developer" content="Ruy M., Wicaro.">

    <title>SimEFB - dev.</title>

    <!-- Vendor css -->
    <link rel="shortcut icon" href="/simefb/img/simefb_logo.png" />
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    

    <!-- Style CSS -->
    <link rel="stylesheet" href="../../css/style.css">
  </head>

    <style>

body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
    </style>
</head>

<body>

<!-- Trigger/Open The Modal -->
<button class="btn btn-primary btn-lg active" id="pdfbtn"><ion-icon name="document-text-sharp"></ion-icon><br>Visualizar</button>

<!-- The Modal -->
<div id="pdfview" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <iframe id="carta" src="http://ww1.jeppesen.com/documents/aviation/notices-alerts/chart-alert/SBGR/SBGRfiles.pdf" width="990px" height="900px"></iframe>
<br>
<br>
    <button class="btn btn-success"><ion-icon name="download-sharp"></ion-icon><br>Download</button>
    <br>
    <button class="btn btn-danger"><ion-icon name="print-sharp"></ion-icon><br>Imprimir</button>
    <br>
    <button class="btn btn-warning"><ion-icon name="document-attach-sharp"></ion-icon><br>Gerar Link</button>

  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("pdfview");

// Get the button that opens the modal
var btn = document.getElementById("pdfbtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
