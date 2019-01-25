<?
$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
switch($mnu)
  {
  case "quienes": $b="act"; break;
  case "servicios": $c="act"; break;
  case "generalidades": $d="act"; break;
  case "profesionales": $e="act"; break;
  case "contacto": $f="act"; break;
  default: $a="act"; break;
  }
 ?>
 <nav>
    <!--<div class="stick-logo col-lg-1"><a title="e-commerce" href="index.php"><img alt="logo" src="images/visual.png"></a> </div>-->
    <div class="container">
      <div class="row">
        <div class="mtmegamenu">
         <div class="logo-primary col-lg-3 col-md-3 col-sm-2 "><a href="index.php"><img src="images/vermexico_logo4.png" alt="Visual Experience Restoration"></a></div>
          <ul class="puntero">
            <li class="mt-root demo_custom_link_cms">
              <div class="mt-root-item"><a href="index.php">
                <div class="title title_font"><span class="title-text <?echo $a;?>">INICIO</span></div>
                </a></div>
            </li>

            <li class="mt-root">
              <div class="mt-root-item"><a href="quienessomos.php">
                <div class="title title_font"><span class="title-text <?echo $b;?>">QUIÉNES SOMOS</span></div>
                </a></div>
            </li>

            <li class="mt-root">
              <div class="mt-root-item"><a href="#">
                <div class="title title_font"><span class="title-text <?echo $c;?>">SERVICIOS</span></div>
                </a></div>
                <ul class="menu-items col-md-2 col-sm-3 col-xs-12">
                <li class="menu-item depth-1">
                  <div class="title"> <a href="lentesdecontacto.php"><span>LENTES DE CONTACTO</span></a></div>
                </li>
                <li class="menu-item depth-1">
                  <div class="title"> <a href="lentesinfinity.php"><span>LENTES INFINITY</span></a></div>
                </li>
                <li class="menu-item depth-1">
                  <div class="title"> <a href="lentespersonalizados.php"><span>LENTES PERSONALIZADOS</span></a></div>
                </li>
                <li class="menu-item depth-1">
                  <div class="title"> <a href="casosdeexito.php"><span>CASOS DE ÉXITO</span></a></div>
                </li>
              </ul>
            </li>

            <li class="mt-root">
              <div class="mt-root-item"><a href="generalidades.php">
                <div class="title title_font"><span class="title-text <?echo $d;?>">GENERALIDADES</span></div>
                </a></div>
            </li>

            <li class="mt-root">
              <div class="mt-root-item"><a href="profesionales.php">
                <div class="title title_font"><span class="title-text <?echo $e;?>">PROFESIONALES</span></div>
                </a></div>
                <ul class="menu-items sec col-md-2 col-sm-3 col-xs-12">
                <li class="menu-item depth-1">
                  <div class="title"> <a href="equipo.php"><span>EQUIPO ESPECIALIZADO</span></a></div>
                </li>
              </ul>
            </li>

            <li class="mt-root">
              <div class="mt-root-item"><a href="contacto.php">
                <div class="title title_font"><span class="title-text <?echo $f;?>">CONTACTO</span></div>
                </a></div>
            </li>

        </div>
      </div>
    </div>
  </nav>
  <!-- end nav -->