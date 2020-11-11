<!-- Footer -->
<div id="footer-section">

    <!-- Subscribe Section -->
    <section class="g-bg-blue-radialgradient-circle g-color-white g-pa-20">
      <div class="container u-bg-overlay__inner">
        <div class="row">
          <div class="col-md-8 align-self-center">
            <h2 class="h3 text-uppercase g-font-weight-300 g-mb-20 g-mb-0--md">Subscribe to our
              <strong>newsletter</strong></h2>
            <p>We offer maintenance tips, product recalls, and much more...</p>
          </div>

          <div class="col-md-4 align-self-center">
            <div class="input-group g-brd-white--focus g-rounded-50">
              <input
                class="form-control g-font-size-default g-placeholder-white g-color-white g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_8 g-py-12 g-px-12"
                type="email" placeholder="Enter your email...">
              <div class="input-group-append">
                <button class="btn u-btn-primary g-color-white g-bg-transparent g-brd-white-opacity-0_8 g-px-12"
                  type="submit">
                  <i class="icon-envelope g-pos-rel g-top-1"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Subscribe Section -->
  
    <!-- Copyright Footer -->
    <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-40">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
            <div class="d-lg-flex">
              <small class="d-block g-font-size-default g-mr-60 g-mb-10 g-mb-0--md">2020 &copy; All Rights
                Reserved.</small>

              <ul class="u-list-inline">
                <li class="list-inline-item">
                  Service Area Includes
                </li>
                <li class="list-inline-item">
                </li>
                <li class="list-inline-item">
                  Medicine Hat
                </li>
                <li class="list-inline-item">
                  <span class="happy">|</span>
                </li>
                <li class="list-inline-item">
                  Dunmore
                </li>
                <li class="list-inline-item">
                <span class="happy">|</span>
                </li>
                <li class="list-inline-item">
                  Redcliff
                </li>
              </ul>
            </div>
          </div>
          <!-- End Copyright Footer -->

          <div class="col-md-4 text-center text-md-left g-mb-10 g-mb-0--md">
            <div class="d-lg-flex">
              <ul class="u-list-inline">
                <li class="list-inline-item">
                  <a class="g-color-white-opacity-0_8 g-color-white--hover" href="testimonial.php">Testimonials</a>
                </li>
                <li class="list-inline-item">
                </li>
                <li class="list-inline-item">
                <span class="happy">|</span>
                </li>
                <li class="list-inline-item">
                  <a class="g-color-white-opacity-0_8 g-color-white--hover" href="about.php">About Us</a>
                </li>
                <li class="list-inline-item">
                <span class="happy">|</span>
                </li>
                <li class="list-inline-item">
                  <a class="g-color-white-opacity-0_8 g-color-white--hover" href="contact.php">Contact</a>
                </li>               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    

    <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="assets/vendor/popper.js/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/appear.js"></script>
  <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
  <script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
  <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="assets/vendor/typedjs/typed.min.js"></script>
  <script src="assets/vendor/circles/circles.min.js"></script>
  <script src="assets/vendor/custombox/custombox.min.js"></script>

  <!-- JS Unify -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/components/hs.header.js"></script>
  <script src="assets/js/helpers/hs.hamburgers.js"></script>
  <script src="assets/js/helpers/hs.height-calc.js"></script>
  <script src="assets/js/components/hs.tabs.js"></script>
  <script src="assets/js/components/hs.popup.js"></script>
  <script src="assets/js/components/text-animation/hs.text-slideshow.js"></script>
  <script src="assets/js/components/hs.rating.js"></script>
  <script src="assets/js/components/hs.onscroll-animation.js"></script>
  <script src="assets/js/components/hs.counter.js"></script>
  <script src="assets/js/components/hs.chart-pie.js"></script>
  <script src="assets/js/components/hs.go-to.js"></script>
  <script src="assets/js/components/hs.modal-window.js"></script>

  <!-- JS Customization -->
  <script src="assets/vendor/slick/slick.min.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of text animation (typing)
      $(".u-text-animation.u-text-animation--typing").typed({
        strings: [
          "call our parts line"
        ],
        typeSpeed: 60,
        loop: true,
        backDelay: 1500
      });  
     // initialization of popups (modal)
     $.HSCore.components.HSModalWindow.init('[data-modal-target]');

      // initialization of tabs
      $.HSCore.components.HSTabs.init('[role="tablist"]');

      // initialization of header height offset
      $.HSCore.helpers.HSHeightCalc.init();

      // initialization of scroll animation
      $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

      // initialization of counters
      var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

      // initialization of chart pies with rtl option
      var rtlItems = $.HSCore.components.HSChartPie.init('.js-pie-rtl', {
        rtl: true
      });

      // initialization of rating
      $.HSCore.components.HSRating.init($('.js-rating'), {
        spacing: 4
      });

      // initialization of popups with media
      $.HSCore.components.HSPopup.init('.js-fancybox-media', {
        helpers: {
          media: {},
          overlay: {
            css: {
              'background': 'rgba(255, 255, 255, .8)'
            }
          }
        }
      });

      // initialization of text animation (typing)
      $(".u-text-animation.u-text-animation--typing").typed({
        strings: [
          "call our parts line"
        ],
        typeSpeed: 60,
        loop: true,
        backDelay: 1500
      });

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });

    $(window).on('load', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#js-header'));
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991
      });

            // bold current date and time
      var days = 'sunday,monday,tuesday,wednesday,thursday,friday,saturday,sunday'.split(',');
      document.getElementById(days[(new Date()).getDay()]).className = "boldDate";

     

    });

    $(window).on('resize', function () {
      setTimeout(function () {
        $.HSCore.components.HSTabs.init('[role="tablist"]');
      }, 200);
    });
  </script>

</body>
</html>