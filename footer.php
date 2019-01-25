<?php
function footerprin () {
?>
<!-- Footer -->
<footer>


  <div class="footer-coppyright">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-xs-12 coppyright"><a href="#">© Copyright VER MÉXICO 2016</a></div>
        <div class="social col-sm-4 col-xs-12">
          <ul class="inline-mode">
            <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/Ver-M%C3%A9xico-352753525083299/?notif_t=fbpage_fan_invite&notif_id=1483645544972721"><i class="fa fa-facebook"></i></a></li>
            <!--
            <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
            <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
            -->
          </ul>
        </div>
        <div class="col-sm-4 col-xs-12 tel">Tel 7594.9534 / <a href="contacto.php">Contacto</a></div>
      </div>
    </div>
  </div>
</footer>

<!-- End Footer -->
<a href="#" class="totop"> </a>


<!--
<div class="popup-block-subscribe popup" style="display:none;">
<div style="display: none;" id="popup-newsletter">
  <form action="#" method="post" id="popup-newsletter-validate-detail">
    <div class="popup-block-content">
      <div class="popup-right">
        <div class="form-subscribe-header popup-block-title">
          <label>Signup for our newsletter &  promotions</label>
        </div>
        <h2 class="sub-text"><b>Get</b><strong> 55%</strong> on your next purchase</h2>
        <div class="newsletter-new">
          <div class="input-box">
            <input name="email" id="pnewsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Your email adress ..." type="text">
            <button type="submit" title="Subscribe" class="button"><span>Subscribe</span></button>
          </div>
        </div>
        <div class="social">
          <ul class="inline-mode">
            <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
            <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
            <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
            <li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-rss"></i></a></li>
            <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
            <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="subscribe-bottom">
          <input type="checkbox">
          Don’t show this popup again </div>
      </div>
    </div>
  </form>
</div>
</div>
-->
<!-- JS -->

<!-- cookies js -->
<script type="text/javascript" src="js/cookies.js"></script>


<!-- jquery js -->
<script type="text/javascript" src="js/jquery.min.js"></script>





<!-- bootstrap js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- switcher js -->
<script src="switcher/js/colorpicker.js"></script>

<!-- owl.carousel.min js -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<!-- bxslider js -->
<script type="text/javascript" src="js/jquery.bxslider.js"></script>

<!--jquery-slider js -->
<script type="text/javascript" src="js/slider.js"></script>

<!-- megamenu js -->
<script type="text/javascript" src="js/megamenu.js"></script>
<script type="text/javascript">
      /* <![CDATA[ */
      var mega_menu = '0';

      /* ]]> */
      </script>

<!-- jquery.mobile-menu js -->
<script type="text/javascript" src="js/mobile-menu.js"></script>

<!-- jquery.waypoints js --> <script type="text/javascript" src="js/waypoints.js"></script>

<!--jquery-ui.min js -->
<script src="js/jquery-ui.js"></script>

<!-- main js -->
<script type="text/javascript" src="js/main.js"></script>

<!-- infographic js -->
<script type="text/javascript" src="js/infographic.js"></script>

<!-- tooltips js -->
<script src="js/tooltips/jquery.tooltip.js"></script>

<!-- progress js -->
<script src="js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script>

<!-- jquery.waypoints js -->
<script type="text/javascript" src="js/waypoints.js"></script>

<!-- animate number js -->
<script src="js/aninum/jquery.animateNumber.min.js"></script>





<!-- popup newsletter js -->
<script type="text/javascript" src="js/popup-newsletter.js"></script>


<script type="text/javascript">

    /******************************************
      - PREPARE PLACEHOLDER FOR SLIDER  -
    ******************************************/

    var setREVStartSize=function(){};


    setREVStartSize();
    function revslider_showDoubleJqueryError(sliderID) {}
    var tpj=jQuery;
    tpj.noConflict();
    var revapi6;
    tpj(document).ready(function() {
      if(tpj("#rev_slider_6_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_6_1");
      }else{
        revapi6 = tpj("#rev_slider_6_1").show().revolution({
          sliderType:"standard",
          sliderLayout:"auto",
          dottedOverlay:"none",
          delay:6000,
          navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            onHoverStop:"off",
            touch:{
              touchenabled:"on",
              swipe_threshold: 0.7,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
            }
            ,
            arrows: {
              style:"hades",
              enable:true,
              hide_onmobile:false,
              hide_onleave:true,
              hide_delay:200,
              hide_delay_mobile:1200,
              tmp:'<div class="tp-arr-allwrapper">  <div class="tp-arr-imgholder"></div></div>',
              left: {
                h_align:"left",
                v_align:"center",
                h_offset:20,
                v_offset:0
              },
              right: {
                h_align:"right",
                v_align:"center",
                h_offset:20,
                v_offset:0
              }
            }
            ,
            bullets: {
              enable:true,
              hide_onmobile:false,
              style:"hades",
              hide_onleave:true,
              hide_delay:200,
              hide_delay_mobile:1200,
              direction:"horizontal",
              h_align:"center",
              v_align:"bottom",
              h_offset:0,
              v_offset:20,
              space:5,
              tmp:'<span class="tp-bullet-image"></span>'
            }
          },
          gridwidth:1920,
          gridheight:645,
          lazyType:"none",
          shadow:0,
          spinner:"spinner0",
          stopLoop:"off",
          stopAfterLoops:-1,
          stopAtSlide:-1,
          shuffle:"off",
          autoHeight:"on",
          disableProgressBar:"on",
          hideThumbsOnMobile:"off",
          hideSliderAtLimit:0,
          hideCaptionAtLimit:0,
          hideAllCaptionAtLilmit:0,
          startWithSlide:0,
          debugMode:false,
          fallbacks: {
            simplifyAll:"off",
            nextSlideOnWindowFocus:"off",
            disableFocusListener:false,
          }
        });
      }
    }); /*ready*/
  </script>
</body> <!--La llave de apertura esta en header -->
<?php
}
?>
