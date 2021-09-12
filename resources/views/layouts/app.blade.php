<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- SEO Meta Tags-->
    <meta name="description" content="Createx - Multipurpose Bootstrap Template and UI Kit">
    <meta name="keywords" content="bootstrap, business, creative agency, construction, services, e-commerce, shopping cart, mobile app showcase, multipurpose, shop, ui kit, marketing, seo, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="/assets/img/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" media="screen" href="/assets/vendor/tiny-slider/dist/tiny-slider.css"/>

    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="/assets/css/demo/ecommerce/theme.min.css">

    <!-- Page loading styles-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #787a80;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        background-color: #cfcfd1;
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      @keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
    </style>

    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();
    </script>

    <!-- Demo switcher offcanvas toggle styles -->
    <style>
      .demo-switcher {
        position: fixed;
        display: block;
        top: 50%;
        right: 1rem;
        z-index: 100;
      }
      .demo-switcher-inner {
        width: 3rem;
        height: 3rem;
        border: 1px solid #e5e8ed;
        border-radius: 50%;
        background-color: #fff;
        color: #1e212c;
        font-size: 1.25rem;
        line-height: 3rem;
        text-align: center;
        text-decoration: none;
        box-shadow: 0px 10px 15px 0px rgba(30,33,44,0.10);
      }
    </style>

    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
    @livewireStyles
    @yield('styles')
  </head>


  <!-- Body-->
  <body>

    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>

    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>

    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">


      <!-- Demo switcher offcanvas -->
      <div id="demo-switcher" class="offcanvas offcanvas-end">
        <div class="offcanvas-header d-block border-bottom">
          <div class="d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">Choose Demo</h2>
            <button class="btn-close me-n1" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="d-flex pt-3">
            <a href="../index-2.html" class="btn btn-sm btn-outline-secondary d-block w-100 my-0 me-2">
              <i class="ci-home fs-base me-1"></i>
              Main Page
            </a>
            <a href="../components/typography.html" class="btn btn-sm btn-outline-secondary d-block w-100 my-0">
              <i class="ci-files fs-base me-1"></i>
              Docs / UI Kit
            </a>
          </div>
        </div>
        <div class="offcanvas-body pt-4 pb-3" data-simplebar data-simplebar-auto-hide="true">
          <a href="../creative-agency/index.html" class="d-block heading-highlight shadow-sm rounded-bottom pb-3 mb-4">
            <img src="/assets/img/demo-switcher/creative-agency.jpg" class="d-block rounded-top mb-2" alt="Creative Agency">
            <h6 class="mb-0 pt-1 text-center">Creative Agency</h6>
          </a>
          <a href="index.html" class="d-block heading-highlight shadow-sm rounded-bottom pb-3 mb-4">
            <img src="/assets/img/demo-switcher/ecommerce.jpg" class="d-block rounded-top mb-2" alt="E-Commerce">
            <h6 class="mb-0 pt-1 text-center">E-Commerce</h6>
          </a>
          <a href="../construction/index.html" class="d-block heading-highlight shadow-sm rounded-bottom pb-3 mb-4">
            <img src="/assets/img/demo-switcher/construction.jpg" class="d-block rounded-top mb-2" alt="Construction Bureau">
            <h6 class="mb-0 pt-1 text-center">Construction Bureau</h6>
          </a>
          <a href="../seo-agency/index.html" class="d-block heading-highlight shadow-sm rounded-bottom pb-3 mb-4">
            <img src="/assets/img/demo-switcher/seo-agency.jpg" class="d-block rounded-top mb-2" alt="SEO & Marketing Agency">
            <h6 class="mb-0 pt-1 text-center">SEO &amp; Marketing Agency</h6>
          </a>
          <a href="../online-courses/index.html" class="d-block heading-highlight shadow-sm rounded-bottom pb-3 mb-4">
            <img src="/assets/img/demo-switcher/online-courses.jpg" class="d-block rounded-top mb-2" alt="Online Courses">
            <h6 class="mb-0 pt-1 text-center">Online Courses</h6>
          </a>
        </div>
        <div class="offcanvas-footer flex-column border-top">
          <a href="https://themes.getbootstrap.com/product/createx-multipurpose-template-ui-kit/" class="btn btn-primary d-block w-100" target="_blank" rel="noopener">
            <i class="ci-cart mt-n1 me-2"></i>
            Buy Createx
          </a>
        </div>
      </div>


      <!-- Demo switcher offcanvas toggle -->
      <a href="#demo-switcher" class="demo-switcher" data-bs-toggle="offcanvas">
        <div class="demo-switcher-inner" data-bs-toggle="tooltip" data-bs-placement="left" title="Choose Demo">
          <i class="ci-layouts"></i>
        </div>
      </a>


    @livewire('auth.auths')


      <!-- Shopping cart offcanvas -->
      <div id="cart" class="offcanvas offcanvas-end">

        <!-- Header -->
        <div class="offcanvas-header align-items-center border-bottom">
          <h2 class="h5 mb-0">Your cart (4)</h2>
          <button class="btn-close me-n1" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="offcanvas-body">
          <!-- Item -->
          <div class="d-flex align-items-start p-4 border-bottom mx-n4">
            <a href="shop-single.html" style="min-width: 80px;">
              <img src="/assets/img/ecommerce/cart/01.png" width="80" alt="Product thumb">
            </a>
            <div class="w-100 ps-3">
              <div class="d-flex justify-content-between">
                <div class="w-100 pe-2">
                  <h3 class="fs-sm mb-3">
                    <a href="shop-single.html" class="nav-link fw-bold">Basic hooded sweatshirt in pink</a>
                  </h3>
                  <ul class="list-unstyled fs-xs mt-n2 mb-2">
                    <li class="mb-0"><span class="text-muted">Color:</span> Pink</li>
                    <li class="mb-0"><span class="text-muted">Size:</span> S</li>
                  </ul>
                  <div class="d-flex align-items-center">
                    <input type="number" class="form-control form-control-sm bg-light me-3" style="width: 4.5rem;" value="1">
                    <div class="text-nowrap"><strong class="text-danger">$15.00</strong> <s class="fs-xs text-muted">$31.00</s></div>
                  </div>
                  <button class="btn btn-link btn-sm text-decoration-none px-0 pb-0">
                    Move to
                    <i class="ci-heart ms-1"></i>
                  </button>
                </div>
                <div class="nav-muted me-n2">
                  <a href="#" class="nav-link px-2 mt-n2" data-bs-toggle="tooltip" title="Remove"><i class="ci-delete"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Item -->
          <div class="d-flex align-items-start p-4 border-bottom mx-n4">
            <a href="shop-single.html" style="min-width: 80px;">
              <img src="/assets/img/ecommerce/cart/02.png" width="80" alt="Product thumb">
            </a>
            <div class="w-100 ps-3">
              <div class="d-flex justify-content-between">
                <div class="w-100 pe-2">
                  <h3 class="fs-sm mb-3">
                    <a href="shop-single.html" class="nav-link fw-bold">Black and white sport cap</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <input type="number" class="form-control form-control-sm bg-light me-3" style="width: 4.5rem;" value="1">
                    <div class="text-nowrap"><strong>$18.15</strong></div>
                  </div>
                  <button class="btn btn-link btn-sm text-decoration-none px-0 pb-0">
                    Move to
                    <i class="ci-heart ms-1"></i>
                  </button>
                </div>
                <div class="nav-muted me-n2">
                  <a href="#" class="nav-link px-2 mt-n2" data-bs-toggle="tooltip" title="Remove"><i class="ci-delete"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Item -->
          <div class="d-flex align-items-start p-4 border-bottom mx-n4">
            <a href="shop-single.html" style="min-width: 80px;">
              <img src="/assets/img/ecommerce/cart/03.png" width="80" alt="Product thumb">
            </a>
            <div class="w-100 ps-3">
              <div class="d-flex justify-content-between">
                <div class="w-100 pe-2">
                  <h3 class="fs-sm mb-3">
                    <a href="shop-single.html" class="nav-link fw-bold">Mid-rise slim cropped fit jeans</a>
                  </h3>
                  <ul class="list-unstyled fs-xs mt-n2 mb-2">
                    <li class="mb-0"><span class="text-muted">Size:</span> M</li>
                  </ul>
                  <div class="d-flex align-items-center">
                    <input type="number" class="form-control form-control-sm bg-light me-3" style="width: 4.5rem;" value="1">
                    <div class="text-nowrap"><strong>$76.00</strong></div>
                  </div>
                  <button class="btn btn-link btn-sm text-decoration-none px-0 pb-0">
                    Move to
                    <i class="ci-heart ms-1"></i>
                  </button>
                </div>
                <div class="nav-muted me-n2">
                  <a href="#" class="nav-link px-2 mt-n2" data-bs-toggle="tooltip" title="Remove"><i class="ci-delete"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Item -->
          <div class="d-flex align-items-start p-4 mx-n4">
            <a href="shop-single.html" style="min-width: 80px;">
              <img src="/assets/img/ecommerce/cart/04.png" width="80" alt="Product thumb">
            </a>
            <div class="w-100 ps-3">
              <div class="d-flex justify-content-between">
                <div class="w-100 pe-2">
                  <h3 class="fs-sm mb-3">
                    <a href="shop-single.html" class="nav-link fw-bold">Men fashion gray shoes</a>
                  </h3>
                  <ul class="list-unstyled fs-xs mt-n2 mb-2">
                    <li class="mb-0"><span class="text-muted">Color:</span> Gray</li>
                    <li class="mb-0"><span class="text-muted">Size:</span> 10.5</li>
                  </ul>
                  <div class="d-flex align-items-center">
                    <input type="number" class="form-control form-control-sm bg-light me-3" style="width: 4.5rem;" value="1">
                    <div class="text-nowrap"><strong>$84.00</strong></div>
                  </div>
                  <button class="btn btn-link btn-sm text-decoration-none px-0 pb-0">
                    Move to
                    <i class="ci-heart ms-1"></i>
                  </button>
                </div>
                <div class="nav-muted me-n2">
                  <a href="#" class="nav-link px-2 mt-n2" data-bs-toggle="tooltip" title="Remove"><i class="ci-delete"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <div class="offcanvas-footer flex-column border-top">
          <div class="d-flex align-items-center justify-content-between mb-3 pb-1">
            <span class="text-muted me-2">Subtotal:</span>
            <span class="h5 mb-0">$198.65</span>
          </div>
          <a href="checkout.html" class="btn btn-primary btn-lg d-block w-100">
            <i class="ci-credit-card fs-lg mt-n1 me-1"></i>
            Checkout
          </a>
        </div>
      </div>


    @livewire('layouts.nav')
      <!-- header -->

    @yield('content')
    </main>
    <!-- Footer -->
    @livewire('layouts.footer')
