<?

include ("header.php");

include ("footer.php");



if (isset($_POST['enviar'])) {

  require("phpmailer/solicitud_mail.php");

}

?>

<!DOCTYPE html>

<html lang="en">

<? headprin() ?>

<? 
$mnu="contacto";
include ("menu.php"); ?>

<div class="container-fluid">

    <div class="row">

      <div class="fullwidth"><img src="images/contacto.jpg"></div>

      <div class="b-naranja">CONTACTO</div>

    </div>

</div>







<div class="row h-espacio"></div>

<!--columna izquierda -->

<div class="container">

  <div class="col-lg-5 col-sm-12">

      <p class="b-normal-big"><b>Encuéntranos</b></p>

      <div class="b-mapa">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.9251967023592!2d-99.2377346845335!3d19.45879168686954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d203b36a258be1%3A0x3a822f1302ca3943!2sEl+Olivar+140%2C+San+Esteban%2C+53768+Naucalpan+de+Ju%C3%A1rez%2C+M%C3%A9x.!5e0!3m2!1ses!2smx!4v1479947981602" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>

  </div>



  <!--columna derecha -->

  <div class="col-lg-7 col-sm-12">

    <p class="b-normal">Si tienes algunos de estos padecimientos, no dudes en contactarnos. Estamos a tus órdenes en:</p>

    <p class="b-normal-big">Polanco</p>
    <p class="b-normal">info@vermexico.com.mx</p>

    <p class="b-normal-big">Calzada de Tlalpan</p>
    <p class="b-normal">info@vermexico.com.mx</p>

    <p class="b-normal-big">El Molinito</p>
    <p class="b-normal">info@vermexico.com.mx</p>

    <p class="b-normal-big">Lomas Verdes</p>
    <p class="b-normal">Av. el Olivar No.140 Col. El Olivar, Naucalpan de Juárez, Edo. de México</p>
    <p class="b-normal">Tel. 7594 9534</p>
    <p class="b-normal">info@vermexico.com.mx</p>

    <br>
    <p class="b-normal-big"><b>Déjanos tu mensaje</b></p>

    <form id="register" method="post" action="">

      <div class="col-lg-7 b-espacio">

        <label class="lb-text">Nombre</label>

        <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control gris" required>

      </div>

      <div class="row"></div>



      <div class="col-lg-7 b-espacio">

        <label class="lb-text">Teléfono</label>

        <input type="number" id="tel" name="tel" placeholder="Teléfono" class="form-control gris" required>

      </div>

      <div class="row"></div>



      <div class="col-lg-7 b-espacio">

        <label class="lb-text">Email</label>

        <input type="email" id="email" name="email" placeholder="vermexico@ejemplo.com" class="form-control gris" required>

      </div>

      <div class="row"></div>



      <div class="col-lg-7 b-espacio">

        <label class="lb-text">Mensaje</label>

        <textarea type="text" id="mensaje" name="mensaje" placeholder="Mensaje" class="form-control gris" required></textarea>

      </div>

      <div class="row"></div>



      <div class="col-lg-7 b-espacio">

        <input type="submit" name="enviar" id="enviar" class="btn btn-primary" value="ENVIAR" data-toggle="modal" data-target="#myModal">

      </div>



      <div class="col-lg-12" id="datos_enviados"></div>

    </form>



  </div>

</div>  <!--end div container -->
<br>


<?php footerprin() ?>

</html>

