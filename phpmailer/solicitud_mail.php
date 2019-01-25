<?php
require("class.phpmailer.php");

$correo="info@vermexico.com.mx";
$correocc="vermexico2017@gmail.com";
$correobcc="il.diabolo@gmail.com";
?>
<meta charset="utf-8">
<?
$nombre = $_POST['nombre'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
//$solicitante = $_SESSION['solicitante'];

//instancio un objeto de la clase PHPMailer
$mail = new PHPMailer(); // defaults to using php "mail()"

//$mail->Host = "localhost";
$mail->From = $email;
$mail->FromName = $nombre;

$mail->AddAddress($correo);
$mail->addReplyTo($correo, "Reply");
if($correocc!="")
    $mail->addCC($correocc);
if($correobcc!="")
    $mail->addBCC($correobcc);

$mail->isHTML(true);

$mail->Subject = "Nuevo mensaje de padecimiento";
$mail->Body = "<h1 style='background: #011f54; padding: 30px; color: #fff; border: 1px solid #9e9e9e; border-radius:7px;'>El Sr(a) <strong>".$nombre."</strong>, con el número <strong>".$tel."</strong>, solicita: <strong>".$mensaje."</strong>; su correo electrónico es <strong>".$email."</strong>.</h1>";
$mail->AltBody = "Ver México";
$mail->CharSet = 'UTF-8';

if(!$mail->Send())
{
  ?>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <div id="modalerror" class="modal">
      <div class="modal-content">
        <h4>Ha ocurrido un error</h4>
        <p>Lo sentimos, es necesario vuelva a llenar sus datos para su solicitud.</p>
        <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
        </div>
      </div>
      
    </div>
   <script type="text/javascript">
       $(document).ready(function(){
      $('#modalerror').openModal();
    });
    </script>
  <?php
}
else
{
  ?>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
  <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Datos enviados exitosamente</h4>
        <p>Gracias por enviarnos su solicitud <? echo $nombre; ?>, serán revisados sus datos para darle seguimiento.</p>
        <div class="modal-footer">
          <a href="#!" class="b-a modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
        </div>
      </div>
      
    </div>
   <script type="text/javascript">
       $(document).ready(function(){
      $('#modal1').openModal();
    });
    </script>
  <?php
}
?>

<!-- Latest compiled JavaScript 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>-->