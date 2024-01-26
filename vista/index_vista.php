<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
</head>

<body>

<?php
    require_once("vista/menu.php");
?>


<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-half">
      <h3>CHU CHU, SILBA EL TREN</h3>
      <p>ANGEL CARMONA</p>
      <p>Una dulce niña viaja por distintos hábitats animales e interacciona con ellos durante el trascurso de un día, desde el amanecer hasta el anochecer.</p>
    </div>
    <div class="w3-half">
      <h3>A DORMIR! LA GRANJA</h3>
      <p>CHARLOTTE ROEDERER</p>
      <p>Para compartir el momento de dormir con tu bebé.</p>
    </div>
  </div>
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-half">
        <h3>APRENDE A IR AL BAÑO CON BLUE</h3>
        <p>VV.AA.</p>
        <p>Blue va al baño y tú también puedes hacerlo. ¡Presiona los botonos y tira de la cadena mientras lees el cuento!</p>
      </div>
      <div class="w3-half">
        <h3>PEPE Y MILA Y LAS ESTACIONES</h3>
        <p>YAYO KAWAMURA</p>
        <p>Un divertido libro con ruedas, lengüetas y otros elementos móviles para que los más pequeños descubran las estaciones con Pepe y Mila.</p>
      </div>
    </div>
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>