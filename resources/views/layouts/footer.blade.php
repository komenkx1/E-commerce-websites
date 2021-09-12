    <footer class="footer pt-sm-5 pt-4 bg-dark">
      <div class="container pt-3">
        <div class="row pb-sm-2">
          <div class="col-6 col-sm-3 col-lg-2 mb-4">
            <h3 class="h6 mb-2 pb-1 text-uppercase text-light">Help</h3>
            <ul class="nav nav-light flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link me-lg-0 me-sm-4 p-0 fw-normal">Delivery &amp; returns</a>
              </li>
              <li class="nav-item mb-2">
                <a href="contacts.html" class="nav-link me-lg-0 me-sm-4 p-0 fw-normal">FAQ</a>
              </li>
              <li class="nav-item mb-2">
                <a href="order-tracking.html" class="nav-link me-lg-0 me-sm-4 p-0 fw-normal">Track order</a>
              </li>
              <li class="nav-item mb-2">
                <a href="blog.html" class="nav-link me-lg-0 me-sm-4 p-0 fw-normal">Blog</a>
              </li>
              <li class="nav-item mb-2">
                <a href="contacts.html" class="nav-link me-lg-0 me-sm-4 p-0 fw-normal">Contacts</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-sm-3 col-lg-2 col-xl-3 mb-4">
            <h3 class="h6 mb-2 pb-1 text-uppercase text-light ps-xl-6">Shop</h3>
            <ul class="nav nav-light flex-column ps-xl-6">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link me-lg-0 me-sm-4 p-0 fw-normal">New arrivals</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link me-lg-0 me-sm-4 p-0 fw-normal">Trending now</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link me-lg-0 me-sm-4 p-0 fw-normal">Sales</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link me-lg-0 me-sm-4 p-0 fw-normal">Brands</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3 pb-2 pb-lg-0 mb-4">
            <h3 class="h6 mb-2 pb-1 text-uppercase text-light">Get in Touch</h3>
            <ul class="nav nav-light flex-column pb-3">
              <li class="nav-item text-nowrap mb-2">
                <span class="text-light me-1">Call:</span>
                <a href="tel:4055550128" class="nav-link d-inline-block me-lg-0 me-sm-4 p-0 fw-normal">(405) 555-0128</a>
              </li>
              <li class="nav-item text-nowrap mb-2">
                <span class="text-light me-1">Email:</span>
                <a href="mailto:support@example.com" class="nav-link d-inline-block me-lg-0 me-sm-4 p-0 fw-normal">support@example.com</a>
              </li>
            </ul>
            <a href="#" class="btn-social bs-solid bs-light me-2">
              <i class="ci-facebook"></i>
            </a>
            <a href="#" class="btn-social bs-solid bs-light me-2">
              <i class="ci-instagram"></i>
            </a>
            <a href="#" class="btn-social bs-solid bs-light me-2">
              <i class="ci-twitter"></i>
            </a>
            <a href="#" class="btn-social bs-solid bs-light me-2">
              <i class="ci-youtube"></i>
            </a>
            <a href="#" class="btn-social bs-solid bs-light">
              <i class="ci-pinterest"></i>
            </a>
          </div>
          <div class="col-lg-4 col-xl-3 mb-4">
            <h3 class="h6 mb-3 pb-1 text-uppercase text-light">Download our App</h3>
            <div class="d-flex flex-wrap flex-sm-nowrap">
              <a href="#" class="btn-market btn-apple mb-3 me-3" role="button">
                <span class="btn-market-subtitle">Download on the</span>
                <span class="btn-market-title">App Store</span>
              </a>
              <a href="#" class="btn-market btn-google mb-3" role="button">
                <span class="btn-market-subtitle">Download on the</span>
                <span class="btn-market-title">Google Play</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top border-light">
        <div class="container py-4">
          <div class="fs-xs text-light">
            <span class="fs-sm">&copy; </span>
            All rights reserved. Made with 
            <i class="ci-heart mt-n1 mx-1 fs-base text-primary align-middle"></i>
            <a href="https://createx.studio/" class="text-light" target="_blank" rel="noopener noreferrer">by Createx Studio</a>
          </div>
        </div>
      </div>
    </footer>


    <!-- Back to top button-->
    <a class="btn-scroll-top" href="#top" data-scroll data-fixed-element>
      <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <i class="btn-scroll-top-icon ci-angle-up"></i>
    </a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Vendor scripts: js libraries and plugins-->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="/assets/vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Main theme script-->
    <script src="/assets/js/theme.min.js"></script>
    @yield('scripts')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <x-livewire-alert::scripts />
    @stack('scripts')
  
  </body>
</html>