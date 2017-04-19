<section class="footer">
    <div class="container">
      <div class="row footer-slide">
        <div class="col-lg-4 col-md-6">
           <h5 class="footer-heading">About Us</h5>
          <p class="text-white mt40">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
          <div class="store-btn mt30">
            <a href="#"><img src="images/app-store.png" alt="download app store"></a>
            <a href="#"><img src="images/google-play.png" alt="download google play"></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5 class="footer-heading">useful  links</h5>
          <div class="row">
            <div class="col-xs-6">
              <ul class="footer-menu mt20">
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#screenshots">Screenshots</a></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="footer-menu mt20">
                <li><a href="#price">Pricing Plan</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#testimoniol">Testimoniol</a></li>
                <li><a href="#contact">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5 class="footer-heading">Newsletter Signup</h5>
          <p class="text-white mt30">Subscribe for newsletter for latest updates about our app.</p>
          <form class="">
            <div class="form-group label-floating relative">
              <label class="control-label" for="focusedInput1">Enter Your Email</label>
              <input type="text" id="focusedInput1" class="form-control">
            </div>
            <button type="submit" class="btn btn-raised btn-round"><i class="fa fa-send"></i></button>
          </form>
          
          <div class="social-link">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <footer class="col-xs-12 text-center">
          <span class="text-white">Aspire © 2017. All rights reserved</span>
        </footer>
      </div>
    </div>
  </section>   
    <!-- The scroll to top feature -->
    <div class="scroll-top-wrapper">
       <span class="scroll-top-inner">
       <i class="fa fa-lg fa-arrow-up"></i>
       </span>
    </div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/material.min.js"></script>
    <script src="js/ripples.min.js"></script>
    <script type="text/javascript">
      $.material.init()
    </script>
    <!-- <script type="text/javascript" src="js/bootstrap-submenu.min.js"></script>
    <script type="text/javascript">
      $('[data-submenu]').submenupicker();
    </script> -->
   <!--  <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript">
      $('#bootstrap-touch-slider').bsTouchSlider();
    </script> -->
    <script type="text/javascript">
        /*scroll*/
        $(document).ready(function() {
          $(function() {
                $(document).on('scroll', function() {
                  if ($(window).scrollTop() > 100) {
                      $('.scroll-top-wrapper').addClass('show');
                  } else {
                      $('.scroll-top-wrapper').removeClass('show');
                  }
              });
             $('.scroll-top-wrapper').on('click', scrollToTop);
          });
          function scrollToTop() {
              verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
              element = $('body');
              offset = element.offset();
              offsetTop = offset.top;
              $('html, body').animate({
                  scrollTop: offsetTop
              }, 500, 'linear');
          }
        });
      </script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/wow.js"></script>
     <script type="text/javascript" src="js/aspire.js"></script>
     <script type="text/javascript" src="js/validator.js"></script>
    <!-- <script type="text/javascript" src="js/lightbox.js"></script> -->
  </body>
</html>