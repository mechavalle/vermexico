<?
include ("header.php");
include ("footer.php");
?>
<!DOCTYPE html>
<html lang="en">
<? headprin() ?>
<!-- MENU WEB-->
<? 
$mnu="";
include ("menu.php"); ?>
 
  <div class="main-slideshow">
    <div class="home-slider full-width">
      <div class="wpb_wrapper">
        <div class="wpb_revslider_element wpb_content_element">
          <div id="rev_slider_6_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#eee;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.0.5 auto mode -->

           <div id="rev_slider_6_1" class="rev_slider fullwidthabanner tp-overflow-hidden" style="display:none;" data-version="5.0.5">

              <ul>

                <!-- SLIDE  -->

                <li data-index="rs-14" data-transition="3dcurtain-horizontal,3dcurtain-vertical,cube,cube-horizontal" data-slotamount="7,7,7,7"  data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="600,600,600,600"  data-thumb="images/slider/banner-foto1.jpg"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide-7" data-description="">

                  <!-- SLIDER DE IMAGENES -->

                  <img src="images/slider/banner-foto1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                  <!-- LAYERS -->



                </li>


                <!-- SLIDE  -->

                <li data-index="rs-17" data-transition="3dcurtain-horizontal,3dcurtain-vertical,cube,cube-horizontal" data-slotamount="7,7,7,7"  data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="600,600,600,600"  data-thumb="images/slider/banner-foto2.jpg"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide-8" data-description="">

                  <!-- MAIN IMAGE -->

                  <img src="images/slider/banner-foto2.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                  <!-- LAYERS -->



                </li>

                <li data-index="rs-15" data-transition="3dcurtain-horizontal,3dcurtain-vertical,cube,cube-horizontal" data-slotamount="7,7,7,7"  data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="600,600,600,600"  data-thumb="images/slider/banner-foto3.jpg"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide-8" data-description="">

                  <!-- MAIN -->

                  <img src="images/slider/banner-foto3.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                  <!-- LAYERS -->



                </li>
                <!-- SLIDE  -->
              </ul>
              <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
          </div>
          <!-- END REVOLUTION SLIDER --></div>
      </div>
    </div>
    <!-- .fullwidth-slider -->
    <!-- .slide-slider-nav -->
  </div>
  <!-- ANCHO COMPLETO SEGUNDA SECCION-->
  <section class="welcome-info">
    <div class="container">
      <div class="row">
        <!-- Begin page header-->
        <div class="page-header-wrapper">
          <div class="container">
            <div class="page-header text-center">
              <h1>¡Bienvenido!</h1>
              <p>Conozca los beneficios de nuestra tecnología</p>
            </div>
          </div>
        </div>
        <!-- End page header-->
      </div>
    </div>
  </section>

  <!--END ANCHO COMPLETO SEGUNDA SECCION-->

  <!-- TERCERA SECCION -> BLOQUES AZULES -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <section class="collestion-area">
      <div class="collection-content">
        <div class="row">
          <a href="lentespersonalizados.php"><div class="col-lg-3 col-xs-12 bloc-blue" id="show">
            <div class="col-lg-4 col-lg-push-4 col-xs-4 col-xs-push-4"><img src="images/lentes.png"></div>
            <div class="row"></div>
            <div class="txt-icon col-lg-6 col-lg-push-3"><p>Lentes personalizados</p></div>
          </a></div>
          <!-- hover -->
	      <div id="lentes" style="display: none;" class="col-lg-3 col-xs-12 blue-hide hidden-sm hidden-xs">
			   <p>Expertos en crear soluciones para los diferentes tipos de Queratocono e irregularidades en cornea.</p>
		  </div>
          <a href="casosdeexito.php"><div class="col-lg-3 col-xs-12 bloc-blue" id="show2">
            <div class="col-lg-4 col-lg-push-4 col-xs-4 col-xs-push-4"><img src="images/exito.png"></div>
            <div class="row"></div>
            <div class="txt-icon col-lg-10 col-lg-push-1"><p>Casos de Éxito</p></div>
          </a></div>
          <!-- hover -->

	      <div id="casos" style="display: none;" class="col-lg-3 col-xs-12 blue-hide hidden-sm hidden-xs">
			   <p>Casos de Éxito ejemplo</p>
		  </div>
          <a href="profesionales.php"><div class="col-lg-3 col-xs-12 bloc-blue" id="show3">
            <div class="col-lg-4 col-lg-push-4 col-xs-4 col-xs-push-4"><img src="images/experiencia.png"></div>
            <div class="row"></div>
            <div class="txt-icon col-lg-10 col-lg-push-1"><p>Conozca más de nuestra experiencia</p></div>
          </a></div>
          <!-- hover -->
	      <div id="conozca" style="display: none;" class="col-lg-3 col-xs-12 blue-hide hidden-sm hidden-xs">
			   <p>Conozca más de nuestra experiencia</p>
		  </div>

        </div>
      </div>
  </section>

<!--END TERCERA SECCION -> BLOQUES AZULES -->
<!-- hover rectangulos azules-->
<script type="text/javascript">
$(document).ready(function(){
  $("#show").mouseenter(function(){ 
  	$("#lentes").slideDown(1000);
  });
  $("#show").mouseleave(function(){
    $("#lentes").slideUp(1000);
  });
//casos
  $("#show2").mouseenter(function(){ 
  	$("#casos").slideDown(1000);
  });
  $("#show2").mouseleave(function(){
    $("#casos").slideUp(1000);
  });
//conozca
  $("#show3").mouseenter(function(){ 
  	$("#conozca").slideDown(1000);
  });
  $("#show3").mouseleave(function(){
    $("#conozca").slideUp(1000);
  });
});
</script>
<!--end hover rectangulos azules-->

  <!-- our clients Slider -->

  <section class="our-clients">
    <div class="container">
      <div class="slider-items-products">
        <div id="our-clients-slider" class="product-flexslider hidden-buttons">
          <!-- Begin page header-->
          <div class="page-header-wrapper">
            <div class="container">
              <div class="page-header text-center wow fadeInUp">

             </div>
            </div>
          </div>

          <!-- End page header-->

          <div class="slider-items slider-width-col6">

            <!-- Item -->

           <!-- <div class="item wow zoomIn"> <a href="https://www.facebook.com/Ver-M%C3%A9xico-352753525083299/?notif_t=fbpage_fan_invite&notif_id=1483645544972721" target="_blank"><img src="images/slider_clients/vermexico.jpg" alt="Image" class="grayscale"></a> </div>-->

            <!-- End Item -->

            <!-- Item 

            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/duette.jpg" alt="Image" class="grayscale img-client"></a> </div>

             End Item -->



            <!-- Item -->

            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/infinity.jpg" alt="Image" class="grayscale"></a> </div>

            <!-- End Item -->



            <!-- Item 

            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/msd.jpg" alt="Image" class="grayscale img-client"></a> </div>//?>

            End Item -->



            <!-- Item 

            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/onefit.jpg" alt="Image" class="grayscale img-client"></a> </div>

            End Item -->



            <!-- Item 

            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/ultra_health.jpg" alt="Image" class="grayscale img-client"></a> </div>

            End Item -->



            <!-- Item 

            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/avizor.jpg" alt="Image" class="grayscale img-client"></a> </div>?>

            End Item -->



            <!-- Item 

            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/vb.jpg" alt="Image" class="grayscale img-client"></a> </div>

            End Item -->

            <!-- Item 

            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/x-cel.png" alt="Image" class="grayscale img-client"></a> </div>

            End Item -->

            <!-- Item 

            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/opharm_verde.jpg" alt="Image" class="grayscale img-client"></a> </div>

            End Item -->

            <!-- Item 

            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/ophfreeday.png" alt="Image" class="grayscale img-client"></a> </div>

            End Item -->

            <!-- Item -->
            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/INF-CONIC-01.png" alt="Image" class="grayscale img-client"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/INF-CONIC-MF-01.png" alt="Image" class="grayscale img-client"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/INF-ORTOK-01.png" alt="Image" class="grayscale img-client"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/INF-PERM-01.png" alt="Image" class="grayscale img-client"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/INF-PERM-MF-01.png" alt="Image" class="grayscale img-client"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/INF-PROT-01.png" alt="Image" class="grayscale img-client"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/INF-SOFT-01.png" alt="Image" class="grayscale img-client"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/INF-SOFT-KN.png" alt="Image" class="grayscale img-client"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item wow zoomIn"> <a href="#"><img src="images/slider_clients/INF-SOFT-MF-01.png" alt="Image" class="grayscale img-client"></a> </div>
            <!-- End Item -->
          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- home contact -->



<?php footerprin() ?>

</html>