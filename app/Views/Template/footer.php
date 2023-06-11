     
<footer>
  <!-- MAIN FOOTER-->
  <div class="bg-gray-700 text-white py-5">
    <div class="container py-4">
      <div class="row gy-4">
        <div class="col-lg-3">
          <h4 class="mb-3 text-uppercase">About Us</h4>
          <p class="text-sm text-gray-500">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <hr>
          <h4 class="h6 text-uppercase">Join Our Monthly Newsletter</h4>
          <form>
            <div class="input-group border mb-3">
              <input class="form-control bg-none border-0 shadow-0 text-white" type="email" placeholder="Email address" aria-label="Email address" aria-describedby="button-submit">
              <button class="btn btn-outline-light bg-none border-0" id="button-submit" type="button"><i class="fas fa-paper-plane"></i></button>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <h4 class="mb-3 text-uppercase">Blog</h4>
          <ul class="list-unstyled">
            <li class="d-flex align-items-center mb-2"><a href="blog-post.html"><img class="img-fluid" src="/assets/img/detailsquare.jpg" alt="..." width="40"></a>
              <div class="ms-2">
                <h6 class="text-uppercase mb-0"> <a class="text-reset" href="blog-post.html">Blog post name</a></h6>
              </div>
            </li>
            <li class="d-flex align-items-center mb-2"><a href="blog-post.html"><img class="img-fluid" src="/assets/img/detailsquare.jpg" alt="..." width="40"></a>
              <div class="ms-2">
                <h6 class="text-uppercase mb-0"> <a class="text-reset" href="blog-post.html">Blog post name</a></h6>
              </div>
            </li>
            <li class="d-flex align-items-center mb-2"><a href="blog-post.html"><img class="img-fluid" src="/assets/img/detailsquare.jpg" alt="..." width="40"></a>
              <div class="ms-2">
                <h6 class="text-uppercase mb-0"> <a class="text-reset" href="blog-post.html">Very very long blog post name</a></h6>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h4 class="mb-3 text-uppercase">Contact</h4>
          <p class="text-uppercase text-sm text-gray-500"><strong>Universal Ltd.</strong><br>13/25 New Avenue <br>Newtown upon River <br>45Y 73J <br>England <br><strong>Great Britain</strong></p><a class="btn btn-primary" href="contact.html">Go to contact page</a>
        </div>
        <div class="col-lg-3">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mb-2 me-2 pb-1"><a href="#"><img class="img-fluid" src="/assets/img/detailsquare.jpg" alt="..." width="70"></a></li>
            <li class="list-inline-item mb-2 me-2 pb-1"><a href="#"><img class="img-fluid" src="/assets/img/detailsquare2.jpg" alt="..." width="70"></a></li>
            <li class="list-inline-item mb-2 me-2 pb-1"><a href="#"><img class="img-fluid" src="/assets/img/detailsquare3.jpg" alt="..." width="70"></a></li>
            <li class="list-inline-item mb-2 me-2 pb-1"><a href="#"><img class="img-fluid" src="/assets/img/detailsquare3.jpg" alt="..." width="70"></a></li>
            <li class="list-inline-item mb-2 me-2 pb-1"><a href="#"><img class="img-fluid" src="/assets/img/detailsquare2.jpg" alt="..." width="70"></a></li>
            <li class="list-inline-item mb-2 me-2 pb-1"><a href="#"><img class="img-fluid" src="/assets/img/detailsquare.jpg" alt="..." width="70"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- COPYRIGHTS                -->
  <div class="bg-dark py-5">
    <div class="container">
      <div class="row align-items-cenrer gy-3 text-center">
        <div class="col-md-6 text-md-start">
          <p class="mb-0 text-sm text-gray-500">&copy; 2022. Your company / name goes here </p>
        </div>
        <div class="col-md-6 text text-md-end">
          <p class="mb-0 text-sm text-gray-500">Template designed by  <a href="https://bootstrapious.com" target="_blank">Bootstrapious</a></p>
          <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/attribution-free-license. Thank you.-->
        </div>
      </div>
    </div>
  </div>
  </footer>
</div>
    <!-- JavaScript files-->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/waypoints/lib/noframework.waypoints.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/choices.js/public/assets/scripts/choices.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>