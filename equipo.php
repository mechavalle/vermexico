<?

include ("header.php");

include ("footer.php");

?>

<!DOCTYPE html>

<html lang="en">

<? headprin() ?>

<SCRIPT LANGUAGE="JavaScript" SRC="js/popup.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">
function verimg(archivo)
  {
  document.getElementById("divimagen").innerHTML="<img border='0' src='"+archivo+"'>";
  Popup.showModal('modal'); 
  }
</SCRIPT>

<!-- MENU WEB-->

<? $mnu="profesionales"; include ("menu.php"); ?>

<!-- end nav -->

  

<div class="container-fluid">

    <div class="row">

      <div class="fullwidth"><img src="images/profesion.jpg"></div>

      <div class="b-verde-agua">PROFESIONALES</div>

      <div class="b-transparent hidden-md hidden-sm hidden-xs">EQUIPO</div>

    </div>

</div>







<div class="row"></div>

<!--columna izquierda -->

<div class="container">

  <div class="col-lg-12 txt-ref">

     <p class="b-normal-big">Conozca algunos de nuestros equipos de trabajo, las mejores tecnologías con los que les brindaremos servicios de confianza.</p>

  </div>

  <div class="row espacio-media-query" style="height: 50px;"></div>

  <div class="row">
    <div class="col-lg-8 col-sm-12">
      <p class="b-normal-txt-img" style="height: auto;"><b>PENTACAM</b><br><br>
        Pentacam es una tecnología diagnóstica de última generación , que sus uso principal es tomar  imágenes de segmento anterior del ojo (córnea, cámara anterior, iris y cristalino). basado en una cámara de Scheimpflug rotatoria 360º alrededor del ojo, sin contacto, creando una imagen en 3D de la cámara anterior.
        <br><br>
        Información que aporta:<br>
        <ul style="color: #000; font-family: inherit; text-align: justify; font-size: 1.2em;">
          <li>Topografía corneal de cara anterior y posterior.</li>
          <li>Paquimetría (medida del espesor corneal) de alta precisión.</li>
          <li>Información específica para pre-operatorio de cataratas con lentes Premium (LIO Torica, LIO Multifocal, LIO asférica/esférica) para la mejor selección de lente intraocular personalizada para cada paciente.</li>
          <li>Densidad de córnea y cristalino.</li>
          <li>Visualización de toda la cámara anterior en todas las posiciones de rotación de la cámara de Scheimpflug.</li>
          <li>Pantalla para planificación de cirugía de segmentos intracorneales, aportando toda la información necesaria sobre paquimetría, ejes astigmáticos/comaticos y asfericidades corneales.</li>
          <li>Módulo de detección precoz de queratocono de Belin/Ambrosio.</li>
          <li>Análisis de las aberraciones corneales por wavefront (frente de ondas).</li>
        </ul>
      </p>
    </div>  
  
    <div class="col-lg-4 col-sm-12 img-media-query">
        <div class="b-img">
          <button type="button" class="btn btn-link" onclick="verimg('images/PENTACAM.jpg')"><span class="thumbnail"><img src="images/PENTACAM.jpg" alt=""></span></button>
        </div>
    </div>    
  </div>

  <div class="row espacio-media-query" style="height: 50px;"></div>


  <div class="row">
    <div class="col-lg-8 col-sm-12">
      <p class="b-normal-txt-img" style="height: auto;"><b>AL SCAN</b><br><br>
       BIOMETRO OPTICO:<br><br>
        Información que aporta:<br>
        <ul style="color: #000; font-family: inherit; text-align: justify; font-size: 1.2em;">
          <li>Observación del segmento anterior con imágenes de Scheimpflug y queratometría con doble anillo de mire</li>
          <li>Biometro de ultrasonido incorporado opcional</li>
          <li>Cálculo de potencia IOL y optimización de constantes de IOL</li>
          <li>Funciones adicionales con AL-Scan Viewer para NAVIS-EX</li>
          <li>Longitud axial</li>
          <li>Radio de curvatura corneal</li>
          <li>Profundidad de la cámara anterior</li>
          <li>Grosor corneal central</li>
          <li>Distancia blanca a blanca</li>
          <li>Tamaño de la pupila</li>
        </ul>
      </p>
    </div>  
  
    <div class="col-lg-4 col-sm-12 img-media-query">
        <div class="b-img">
          <button type="button" class="btn btn-link" onclick="verimg('images/ALSCAN.jpg')"><span class="thumbnail"><img src="images/ALSCAN.jpg" alt=""></span></button>
        </div>
    </div>    
  </div>

  <div class="row espacio-media-query" style="height: 50px;"></div>

  <div class="row">
    <div class="col-lg-8 col-sm-12">
      <p class="b-normal-txt-img" style="height: auto;"><b>Campimetro de Humphrey</b><br><br>
       La Campimetría visual también llamada Perimetría visual es un examen que se utiliza para valorar las alteraciones del campo visual. El campo visual es la porción del espacio que es capaz de captar el ojo inmóvil en un momento dado.<br><br>

       La campimetría se utiliza principalmente para realizar el control evolutivo del glaucoma y de otras enfermedades de la retina, como la retinosis pigmentaria.<br><br>
       También se emplea para el estudio de las lesiones de la vía óptica, pues valorando las perdidas del campo visual puede localizarse el lugar de la lesión.
      </p>
    </div>  
  
    <div class="col-lg-4 col-sm-12 img-media-query">
        <div class="b-img">
          <button type="button" class="btn btn-link" onclick="verimg('images/HUMPHREY.jpg')"><span class="thumbnail"><img src="images/HUMPHREY.jpg" alt=""></span></button>
        </div>
    </div>    
  </div>

  <div class="row espacio-media-query" style="height: 50px;"></div>

  <?/*
  <div class="col-lg-12 txt-ref">

     <p class="b-normal-big">Más de nuestros equipos:</p>

  </div>


      <div class="row">

        <div class="col-xs-6 col-md-3">
          <button type="button" class="btn btn-link" onclick="verimg('images/equipo/1.jpg')"><span class="thumbnail"><img src="images/equipo/1.jpg" alt=""></span></button> 
        </div>
        <div class="col-xs-6 col-md-3">          
           <button type="button" class="btn btn-link" onclick="verimg('images/equipo/2.jpg')"><span class="thumbnail"><img src="images/equipo/2.jpg" alt=""></span></button>          
        </div>
        <div class="col-xs-6 col-md-3">
          <button type="button" class="btn btn-link" onclick="verimg('images/equipo/3.jpg')"><span class="thumbnail"><img src="images/equipo/3.jpg" alt=""></span></button> 
        </div>
        <div class="col-xs-6 col-md-3">
          <button type="button" class="btn btn-link" onclick="verimg('images/equipo/4.jpg')"><span class="thumbnail"><img src="images/equipo/4.jpg" alt=""></span></button> 
        </div>

        <div class="col-xs-6 col-md-3">
          <button type="button" class="btn btn-link" onclick="verimg('images/equipo/5.jpg')"><span class="thumbnail"><img src="images/equipo/5.jpg" alt=""></span></button> 
        </div>
        <div class="col-xs-6 col-md-3">
          <button type="button" class="btn btn-link" onclick="verimg('images/equipo/6.jpg')"><span class="thumbnail"><img src="images/equipo/6.jpg" alt=""></span></button> 
        </div>
      
    
        </div>
    </div>
    */?>



<?php footerprin() ?>

<div id="modal" style="border:2px solid black; background-color:#ffffff; padding:10px; text-align:center; display:none;">
  <table border="0" width="100%" cellspacing="0" cellpadding="0">
    <tr>
      <td></td>
      <td width="50" align="right"><button type="button" onclick="Popup.hide('modal')"; class="btn btn-link"><span class="glyphicon glyphicon-remove-circle" style="font-size: 30px; float: right; display: inherit"></span></button>
        </td>
    </tr>
  </table>
  <p align="center">  
  <div id="divimagen"></div>
  </p>
</div>

</html>

