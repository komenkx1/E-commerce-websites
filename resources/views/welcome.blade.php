@extends('layouts.app', ['title'=>'Home'])
@section('content')
       <!-- Promo bar -->
       <section class="tns-promo-bar bg-primary py-2">
        <div class="container d-flex justify-content-center">
          <div class="tns-carousel-wrapper tns-controls-inverse">
            <div class="tns-carousel-inner" data-carousel-options = '{"mode": "gallery", "nav": false}'>
              <div class="fs-xs text-light px-2">
                <strong class="me-1">Up to 70% Off.</strong>
                <a href="#" class="text-light">Shop our latest sale offers</a>
              </div>
              <div class="fs-xs text-light px-2">
                <strong class="me-1">Money back guarantee.</strong>
                <a href="#" class="text-light">Learn more</a>
              </div>
              <div class="fs-xs text-light px-2">
                <strong class="me-1">Friendly customer support.</strong>
                <a href="#" class="text-light">Contact 24/7</a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Hero slider -->
      <section class="tns-carousel-wrapper tns-controls-onhover">
        <div class="tns-carousel-inner" data-carousel-options='{
          "mode": "gallery",
          "navContainer": "#pager",
          "responsive": {
            "0": { "controls": false },
            "991": { "controls": true }
          }
        }'>

          <!-- Slide 1 -->
          <div class="bg-size-cover py-xl-6" style="background-image: url(../assets/img/ecommerce/home/hero-slider/01.jpg);">
            <div class="container pt-5 pb-6">
              <div class="row pb-lg-6">
                <div class="col-lg-6 offset-lg-1 offset-xl-0 pb-4 pb-md-6">
                  <h3 class="fs-lg text-uppercase from-start delay-1">New In</h3>
                  <h2 class="display-2 mb-lg-5 pb-3 from-start">Menswear 2021</h2>
                  <div class="mb-4 scale-up delay-2">
                    <a href="shop-catalog.html" class="btn btn-outline-primary btn-lg">Shop the menswear</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="bg-size-cover py-xl-6" style="background-image: url(../assets/img/ecommerce/home/hero-slider/02.jpg);">
            <div class="container pt-5 pb-6">
              <div class="row pb-lg-6">
                <div class="col-lg-6 offset-lg-1 offset-xl-0 pb-4 pb-md-6">
                  <h3 class="fs-lg text-uppercase from-top delay-1">New Collection</h3>
                  <h2 class="display-2 mb-lg-5 pb-3 scale-down">Fall-Winter 2021</h2>
                  <div class="mb-4 scale-down delay-2">
                    <a href="shop-catalog.html" class="btn btn-outline-primary btn-lg">Shop the collection</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="bg-size-cover py-xl-6" style="background-image: url(../assets/img/ecommerce/home/hero-slider/03.jpg);">
            <div class="container pt-5 pb-6">
              <div class="row pb-lg-6">
                <div class="col-lg-6 offset-lg-1 offset-xl-0 pb-4 pb-md-6">
                  <h3 class="fs-lg text-uppercase from-start delay-1">Limited Edition</h3>
                  <h2 class="display-2 mb-lg-5 pb-3 from-start">Leather Issue</h2>
                  <div class="mb-4 scale-up delay-2">
                    <a href="shop-catalog.html" class="btn btn-outline-primary btn-lg">Shop the collection</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="bg-size-cover py-xl-6" style="background-image: url(../assets/img/ecommerce/home/hero-slider/04.jpg);">
            <div class="container pt-5 pb-6">
              <div class="row pb-lg-6">
                <div class="col-lg-6 offset-lg-1 offset-xl-0 pb-4 pb-md-6">
                  <h3 class="fs-lg text-uppercase from-top delay-1">Hottest Prices</h3>
                  <h2 class="display-2 mb-lg-5 pb-3 scale-down">Kidswear Sales</h2>
                  <div class="mb-4 scale-down delay-2">
                    <a href="shop-catalog.html" class="btn btn-outline-primary btn-lg">Shop sale now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pager -->
        <div class="container position-relative">
          <div class="row mt-lg-n5">
            <div class="col-lg-7 col-md-8 col-sm-10 offset-lg-1 offset-xl-0">
              <div class="position-relative">
                <div id="pager" class="tns-pager tns-pager-inverse mb-xl-5 pb-5 pb-md-6">
                  <button type="button" data-nav="0">01</button>
                  <button type="button" data-nav="1">02</button>
                  <button type="button" data-nav="2">03</button>
                  <button type="button" data-nav="3">04</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Top categories -->
      <section class="container pt-5 pt-lg-0">
        <div class="tns-carousel-wrapper tns-nav-outside">
          <div class="tns-carousel-inner" data-carousel-options='{
            "controls": false,
            "responsive": {
              "0": {
                "gutter": 20
              },
              "400": {
                "items": 2,
                "gutter": 20
              },
              "520": {
                "gutter": 30
              },
              "768": {
                "items": 3,
                "gutter": 30
              }
            }
          }'>
            <!-- Category -->
            <a href="shop-catalog.html" class="d-block image-scale heading-highlight text-center">
              <div class="image-inner mb-3 rounded">
                <img src="../assets/img/ecommerce/home/categories/01.jpg" alt="Women’s">
              </div>
              <h3 class="h5 mb-1">Women’s</h3>
            </a>
            <!-- Category -->
            <a href="shop-catalog.html" class="d-block image-scale heading-highlight text-center">
              <div class="image-inner mb-3 rounded">
                <img src="../assets/img/ecommerce/home/categories/02.jpg" alt="Men’s">
              </div>
              <h3 class="h5 mb-1">Men’s</h3>
            </a>
            <!-- Category -->
            <a href="shop-catalog.html" class="d-block image-scale heading-highlight text-center">
              <div class="image-inner mb-3 rounded">
                <img src="../assets/img/ecommerce/home/categories/03.jpg" alt="Kids'">
              </div>
              <h3 class="h5 mb-1">Kids'</h3>
            </a>
          </div>
        </div>
      </section>


      <!-- New arrivals -->
      <section class="container-fluid px-xl-grid-gutter mt-5 mb-3 mb-sm-4 mt-md-0 mb-lg-5 py-5 py-lg-6">
        <div class="text-center mb-5 pb-2">
          <h2 class="h1">New arrivals</h2>
          <p class="fs-lg text-muted mb-1">Check out our latest arrivals for the upcoming season</p>
          <a href="shop-catalog.html" class="fs-lg">See the collection here</a>
        </div>

        <!-- Product carousel -->
        <div class="tns-carousel-wrapper tns-nav-outside">
          <div class="tns-carousel-inner" data-carousel-options='{
            "controls": false,
            "responsive": {
              "0": {
                "items": 1,
                "gutter": 20
              },
              "420": {
                "items": 2,
                "gutter": 20
              },
              "600": {
                "items": 3,
                "gutter": 20
              },
              "700": {
                "items": 3,
                "gutter": 30
              },
              "900": {
                "items": 4,
                "gutter": 30
              },
              "1200": {
                "items": 5,
                "gutter": 30
              },
              "1400": {
                "items": 6,
                "gutter": 30
              }
            }
          }'>

            <!-- Item -->
            <div>
              <div class="card card-product">
                <div class="card-product-img">
                  <a href="shop-single.html" class="card-img-top">
                    <img src="../assets/img/ecommerce/shop/03.jpg" alt="Product image">
                  </a>
                  <div class="card-product-widgets-top">
                    <div class="star-rating">
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                    </div>
                  </div>
                  <div class="card-product-widgets-bottom">
                    <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                  </div>
                </div>
                <div class="card-body">
                  <h3 class="card-product-title text-truncate mb-2">
                    <a href="shop-single.html" class="nav-link">Black and white sport cap</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <span class="h5 d-inline-block mb-0">$18.15</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div>
              <div class="card card-product">
                <div class="card-product-img">
                  <a href="shop-single.html" class="card-img-top">
                    <img src="../assets/img/ecommerce/shop/13.jpg" alt="Product image">
                  </a>
                  <div class="card-product-widgets-bottom">
                    <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                  </div>
                </div>
                <div class="card-body">
                  <h3 class="card-product-title text-truncate mb-2">
                    <a href="shop-single.html" class="nav-link">Metal bridge sunglasses</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <span class="h5 d-inline-block mb-0">$89.95</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div>
              <div class="card card-product">
                <div class="card-product-img">
                  <a href="shop-single.html" class="card-img-top">
                    <img src="../assets/img/ecommerce/shop/04.jpg" alt="Product image">
                  </a>
                  <div class="card-product-widgets-top">
                    <div class="star-rating">
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star"></i>
                    </div>
                  </div>
                  <div class="card-product-widgets-bottom">
                    <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                  </div>
                </div>
                <div class="card-body">
                  <h3 class="card-product-title text-truncate mb-2">
                    <a href="shop-single.html" class="nav-link">Green baby romper</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <span class="h5 d-inline-block mb-0">$20.40</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div>
              <div class="card card-product">
                <div class="card-product-img">
                  <a href="shop-single.html" class="card-img-top">
                    <img src="../assets/img/ecommerce/shop/02.jpg" alt="Product image">
                  </a>
                  <div class="card-product-widgets-bottom">
                    <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                  </div>
                </div>
                <div class="card-body">
                  <h3 class="card-product-title text-truncate mb-2">
                    <a href="shop-single.html" class="nav-link">Mid-rise slim cropped fit jeans</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <span class="h5 d-inline-block mb-0">$40.00</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div>
              <div class="card card-product">
                <div class="card-product-img">
                  <a href="shop-single.html" class="card-img-top">
                    <img src="../assets/img/ecommerce/shop/06.jpg" alt="Product image">
                  </a>
                  <div class="card-product-widgets-top">
                    <div class="star-rating">
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star"></i>
                      <i class="sr-star ci-star"></i>
                    </div>
                  </div>
                  <div class="card-product-widgets-bottom">
                    <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                  </div>
                </div>
                <div class="card-body">
                  <h3 class="card-product-title text-truncate mb-2">
                    <a href="shop-single.html" class="nav-link">Red dangle earrings</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <span class="h5 d-inline-block mb-0">$29.95</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div>
              <div class="card card-product">
                <div class="card-product-img">
                  <a href="shop-single.html" class="card-img-top">
                    <img src="../assets/img/ecommerce/shop/08.jpg" alt="Product image">
                  </a>
                  <div class="card-product-widgets-bottom">
                    <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                  </div>
                </div>
                <div class="card-body">
                  <h3 class="card-product-title text-truncate mb-2">
                    <a href="shop-single.html" class="nav-link">Baby shoes with laces</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <span class="h5 d-inline-block mb-0">$30.75</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div>
              <div class="card card-product">
                <div class="card-product-img">
                  <a href="shop-single.html" class="card-img-top">
                    <img src="../assets/img/ecommerce/shop/12.jpg" alt="Product image">
                  </a>
                  <div class="card-product-widgets-bottom">
                    <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                  </div>
                </div>
                <div class="card-body">
                  <h3 class="card-product-title text-truncate mb-2">
                    <a href="shop-single.html" class="nav-link">Men fashion gray shoes</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <span class="h5 d-inline-block mb-0">$85.00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Promo banners -->
      <section class="container-fluid px-xl-grid-gutter">
        <div class="row mx-n2">

          <!-- Banner -->
          <div class="col-lg-5 px-2 mb-3">
            <div class="d-flex flex-column h-100 bg-size-cover bg-position-center-y rounded py-5 px-md-5 px-4" style="background-image: url(../assets/img/ecommerce/home/banners/01.jpg);">
              <div class="mt-md-3 mb-md-6 pb-6 px-md-2">
                <h3 class="mb-2 pb-1 fs-sm text-uppercase">Summer Collections</h3>
                <h2 class="pb-3">Sale Up to 70%</h2>
                <a href="#" class="btn btn-outline-primary">Explore new prices</a>
              </div>
            </div>
          </div>

          <!-- Banner -->
          <div class="col-lg-7 px-2 mb-3">
            <div class="d-flex flex-column h-100 bg-size-cover bg-position-center-y rounded py-5 px-md-5 px-4" style="background-image: url(../assets/img/ecommerce/home/banners/02.jpg);">
              <div class="mt-md-3 mb-md-5 pb-5 px-md-2" style="max-width: 22rem;">
                <h3 class="mb-2 pb-1 fs-sm text-uppercase">Deal of the Week</h3>
                <h2 class="pb-3">Stay Warm With Our New Sweaters</h2>
                <a href="#" class="btn btn-outline-primary">Shop now</a>
              </div>
              <div class="mb-md-3 px-md-2">
                <h3 class="mb-2 pb-1 fs-sm text-uppercase">Limited time offer</h3>
                <div class="countdown h3 mb-0" data-countdown="10/01/2022 07:00:00 PM">
                  <div class="countdown-days mb-0">
                    <span class="countdown-value">0</span>
                    <span class="countdown-label mt-1 fs-sm text-body">Days</span>
                  </div>
                  <div class="countdown-hours mb-0">
                    <span class="countdown-value">0</span>
                    <span class="countdown-label mt-1 fs-sm text-body">Hours</span>
                  </div>
                  <div class="countdown-minutes mb-0">
                    <span class="countdown-value">0</span>
                    <span class="countdown-label mt-1 fs-sm text-body">Mins</span>
                  </div>
                  <div class="countdown-seconds mb-0">
                    <span class="countdown-value">0</span>
                    <span class="countdown-label mt-1 fs-sm text-body">Secs</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mx-n2">

          <!-- Banner -->
          <div class="col-lg-7 px-2 mb-3">
            <div class="d-flex flex-column h-100 bg-size-cover bg-position-center-y rounded py-5 px-md-5 px-4" style="background-image: url(../assets/img/ecommerce/home/banners/03.jpg);">
              <div class="mt-md-3 mb-md-6 pb-6 px-md-2" style="max-width: 22rem;">
                <h3 class="mb-2 pb-1 fs-sm text-uppercase">New Collection</h3>
                <h2 class="pb-3">Shoes &amp; Bags<br>Autumn / Winter 2021</h2>
                <a href="#" class="btn btn-outline-primary">See offers</a>
              </div>
            </div>
          </div>

          <!-- Banner -->
          <div class="col-lg-5 px-2 mb-3">
            <div class="d-flex flex-column h-100 bg-size-cover bg-position-center-y rounded pt-5 pb-md-5 px-md-5 px-4" style="background-image: url(../assets/img/ecommerce/home/banners/04.jpg);">
              <div class="mt-md-3 mb-md-5 pb-6 px-md-2" style="max-width: 26rem;">
                <h3 class="mb-2 pb-1 fs-sm text-uppercase">For All New Email Subscribers</h3>
                <h2 class="pb-2">Get 5% Off & Free Delivery</h2>
                <form class="mb-4 needs-validation" novalidate>
                  <label for="sub-email" class="form-label-lg">Email</label>
                  <div class="input-group" style="max-width: 23rem;">
                    <input type="email" id="sub-email" class="form-control" placeholder="Your email address" required>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                  </div>
                </form>
                <div class="fs-sm" style="max-width: 23rem;">*Sign up to be the first to hear about exclusive deals, special offers and upcoming collections.</div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Popular categories -->
      <section class="container mt-1 mb-3 my-sm-4 py-5 py-lg-6">
        <h2 class="h1 mb-5 pb-3 text-center">Popular categories</h2>
        <div class="tns-carousel-wrapper tns-nav-outside">
          <div class="tns-carousel-inner" data-carousel-options='{
            "controls": false,
            "gutter": 30,
            "responsive": {
              "0": { "items": 1 },
              "380": { "items": 2 },
              "550": { "items": 3 },
              "750": { "items": 4 },
              "1000": { "items": 5 },
              "1250": { "items": 6 }
            }
          }'>

            <!-- Category -->
            <div class="pb-2">
              <a href="shop-catalog.html" class="d-block image-scale heading-highlight text-center">
                <div class="image-inner rounded-circle mx-auto mb-4" style="max-width: 180px;">
                  <img src="../assets/img/ecommerce/home/categories/04.jpg" alt="Category image">
                </div>
                <h3 class="h5 mb-3">Tops</h3>
              </a>
            </div>

            <!-- Category -->
            <div class="pb-2">
              <a href="shop-catalog.html" class="d-block image-scale heading-highlight text-center">
                <div class="image-inner rounded-circle mx-auto mb-4" style="max-width: 180px;">
                  <img src="../assets/img/ecommerce/home/categories/05.jpg" alt="Category image">
                </div>
                <h3 class="h5 mb-3">T-shirts</h3>
              </a>
            </div>

            <!-- Category -->
            <div class="pb-2">
              <a href="shop-catalog.html" class="d-block image-scale heading-highlight text-center">
                <div class="image-inner rounded-circle mx-auto mb-4" style="max-width: 180px;">
                  <img src="../assets/img/ecommerce/home/categories/06.jpg" alt="Category image">
                </div>
                <h3 class="h5 mb-3">Caps</h3>
              </a>
            </div>

            <!-- Category -->
            <div class="pb-2">
              <a href="shop-catalog.html" class="d-block image-scale heading-highlight text-center">
                <div class="image-inner rounded-circle mx-auto mb-4" style="max-width: 180px;">
                  <img src="../assets/img/ecommerce/home/categories/07.jpg" alt="Category image">
                </div>
                <h3 class="h5 mb-3">Sandals</h3>
              </a>
            </div>

            <!-- Category -->
            <div class="pb-2">
              <a href="shop-catalog.html" class="d-block image-scale heading-highlight text-center">
                <div class="image-inner rounded-circle mx-auto mb-4" style="max-width: 180px;">
                  <img src="../assets/img/ecommerce/home/categories/08.jpg" alt="Category image">
                </div>
                <h3 class="h5 mb-3">Jackets</h3>
              </a>
            </div>

            <!-- Category -->
            <div class="pb-2">
              <a href="shop-catalog.html" class="d-block image-scale heading-highlight text-center">
                <div class="image-inner rounded-circle mx-auto mb-4" style="max-width: 180px;">
                  <img src="../assets/img/ecommerce/home/categories/09.jpg" alt="Category image">
                </div>
                <h3 class="h5 mb-3">Coats</h3>
              </a>
            </div>
          </div>
        </div>
      </section>


      <!-- Trending products (carousel) -->
      <section class="py-5" style="background-color: #e5e8ed;">
        <div class="container my-lg-2 py-2 py-md-4">
          <div class="d-flex align-items-center justify-content-between pb-sm-1 mb-5">
            <h2 class="h1 mb-0">Trending now</h2>
            <div class="tns-custom-controls tns-controls-inverse" id="custom-controls-trending" tabindex="0">
              <button type="button" data-controls="prev" tabindex="-1">
                <i class="ci-arrow-left"></i>
              </button>
              <button type="button" data-controls="next" tabindex="-1">
                <i class="ci-arrow-right"></i>
              </button>
            </div>
          </div>
          <div class="tns-carousel-wrapper pb-2">
            <div class="tns-carousel-inner" data-carousel-options='{
              "nav": false,
              "controlsContainer": "#custom-controls-trending",
              "responsive": {
                "0": {
                  "items": 1,
                  "gutter": 20
                },
                "480": {
                  "items": 2,
                  "gutter": 24
                },
                "700": {
                  "items": 3,
                  "gutter": 24
                },
                "1100": {
                  "items": 4,
                  "gutter": 30
                }
              }
            }'>

              <!-- Item -->
              <div>
                <div class="card card-product mx-auto">
                  <div class="card-product-img">
                    <a href="shop-single.html" class="card-img-top">
                      <img src="../assets/img/ecommerce/shop/01.jpg" alt="Product image">
                    </a>
                    <div class="card-product-widgets-top">
                      <div class="star-rating ms-auto">
                        <i class="sr-star ci-star-filled active"></i>
                        <i class="sr-star ci-star-filled active"></i>
                        <i class="sr-star ci-star-filled active"></i>
                        <i class="sr-star ci-star-filled active"></i>
                        <i class="sr-star ci-star-filled active"></i>
                      </div>
                    </div>
                    <div class="card-product-widgets-bottom">
                      <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                    </div>
                  </div>
                  <div class="card-body bg-transparent pb-2">
                    <h3 class="card-product-title text-truncate mb-2">
                      <a href="shop-single.html" class="nav-link">Shirt with insertion lace trims</a>
                    </h3>
                    <div class="d-flex align-items-center">
                      <span class="h5 d-inline-block mb-0">$49.95</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div>
                <div class="card card-product mx-auto">
                  <div class="card-product-img">
                    <a href="shop-single.html" class="card-img-top">
                      <img src="../assets/img/ecommerce/shop/07.jpg" alt="Product image">
                    </a>
                    <div class="card-product-widgets-top">
                      <div class="star-rating ms-auto">
                        <i class="sr-star ci-star-filled active"></i>
                        <i class="sr-star ci-star-filled active"></i>
                        <i class="sr-star ci-star-filled active"></i>
                        <i class="sr-star ci-star-filled active"></i>
                        <i class="sr-star ci-star"></i>
                      </div>
                    </div>
                    <div class="card-product-widgets-bottom">
                      <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                    </div>
                  </div>
                  <div class="card-body bg-transparent pb-2">
                    <h3 class="card-product-title text-truncate mb-2">
                      <a href="shop-single.html" class="nav-link">Chrono watch with gold rim and blue strap</a>
                    </h3>
                    <div class="d-flex align-items-center">
                      <span class="h5 d-inline-block mb-0">$120.60</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div>
                <div class="card card-product mx-auto">
                  <div class="card-product-img">
                    <a href="shop-single.html" class="card-img-top">
                      <img src="../assets/img/ecommerce/shop/05.jpg" alt="Product image">
                    </a>
                    <div class="card-product-widgets-bottom">
                      <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                    </div>
                  </div>
                  <div class="card-body bg-transparent pb-2">
                    <h3 class="card-product-title text-truncate mb-2">
                      <a href="shop-single.html" class="nav-link">Check coat with color contrast</a>
                    </h3>
                    <div class="d-flex align-items-center">
                      <span class="h5 d-inline-block mb-0">$183.45</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div>
                <div class="card card-product mx-auto">
                  <div class="card-product-img">
                    <a href="shop-single.html" class="card-img-top">
                      <img src="../assets/img/ecommerce/shop/12.jpg" alt="Product image">
                    </a>
                    <div class="card-product-widgets-bottom">
                      <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                    </div>
                  </div>
                  <div class="card-body bg-transparent pb-2">
                    <h3 class="card-product-title text-truncate mb-2">
                      <a href="shop-single.html" class="nav-link">Men fashion gray shoes</a>
                    </h3>
                    <div class="d-flex align-items-center">
                      <span class="h5 d-inline-block mb-0">$85.00</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div>
                <div class="card card-product mx-auto">
                  <div class="card-product-img">
                    <a href="shop-single.html" class="card-img-top">
                      <img src="../assets/img/ecommerce/shop/06.jpg" alt="Product image">
                    </a>
                    <div class="card-product-widgets-top">
                      <div class="star-rating ms-auto">
                        <i class="sr-star ci-star-filled active"></i>
                        <i class="sr-star ci-star-filled active"></i>
                        <i class="sr-star ci-star-filled active"></i>
                        <i class="sr-star ci-star"></i>
                        <i class="sr-star ci-star"></i>
                      </div>
                    </div>
                    <div class="card-product-widgets-bottom">
                      <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                    </div>
                  </div>
                  <div class="card-body bg-transparent pb-2">
                    <h3 class="card-product-title text-truncate mb-2">
                      <a href="shop-single.html" class="nav-link">Red dangle earrings</a>
                    </h3>
                    <div class="d-flex align-items-center">
                      <span class="h5 d-inline-block mb-0">$29.95</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center pt-4 pt-md-5">
            <a href="shop-catalog.html" class="btn btn-outline-primary btn-lg">Explore top sellers</a>
          </div>
        </div>
      </section>


      <!-- Sale products (carousel) -->
      <section class="container my-2 my-md-3 py-5 py-lg-6">
        <div class="d-flex align-items-center justify-content-between pb-sm-1 mb-5">
          <h2 class="h1 mb-0">Sale up to 70%</h2>
          <div class="tns-custom-controls tns-controls-inverse" id="custom-controls-sale" tabindex="0">
            <button type="button" data-controls="prev" tabindex="-1">
              <i class="ci-arrow-left"></i>
            </button>
            <button type="button" data-controls="next" tabindex="-1">
              <i class="ci-arrow-right"></i>
            </button>
          </div>
        </div>
        <div class="tns-carousel-wrapper pb-2">
          <div class="tns-carousel-inner" data-carousel-options='{
            "nav": false,
            "controlsContainer": "#custom-controls-sale",
            "responsive": {
              "0": {
                "items": 1,
                "gutter": 20
              },
              "480": {
                "items": 2,
                "gutter": 24
              },
              "700": {
                "items": 3,
                "gutter": 24
              },
              "1100": {
                "items": 4,
                "gutter": 30
              }
            }
          }'>

            <!-- Item -->
            <div>
              <div class="card card-product mx-auto">
                <div class="card-product-img">
                  <a href="shop-single.html" class="card-img-top">
                    <img src="../assets/img/ecommerce/shop/11.jpg" alt="Product image">
                  </a>
                  <div class="card-product-widgets-top">
                    <span class="badge product-badge bg-danger">-50%</span>
                    <div class="star-rating ms-auto">
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                    </div>
                  </div>
                  <div class="card-product-widgets-bottom">
                    <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                  </div>
                </div>
                <div class="card-body pb-2">
                  <h3 class="card-product-title text-truncate mb-2">
                    <a href="shop-single.html" class="nav-link">Leather crossbody bag with chain lace</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <span class="h5 d-inline-block text-danger mb-0">$89.50</span>
                    <del class="d-inline-block ms-2 ps-1 text-muted">$179.00</del>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div>
              <div class="card card-product mx-auto">
                <div class="card-product-img">
                  <a href="shop-single.html" class="card-img-top">
                    <img src="../assets/img/ecommerce/shop/10.jpg" alt="Product image">
                  </a>
                  <div class="card-product-widgets-top">
                    <span class="badge product-badge bg-danger">-33%</span>
                  </div>
                  <div class="card-product-widgets-bottom">
                    <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                  </div>
                </div>
                <div class="card-body pb-2">
                  <h3 class="card-product-title text-truncate mb-2">
                    <a href="shop-single.html" class="nav-link">Skinny push-up jeans</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <span class="h5 d-inline-block text-danger mb-0">$53.60</span>
                    <del class="d-inline-block ms-2 ps-1 text-muted">$80.00</del>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div>
              <div class="card card-product mx-auto">
                <div class="card-product-img">
                  <a href="shop-single.html" class="card-img-top">
                    <img src="../assets/img/ecommerce/shop/14.jpg" alt="Product image">
                  </a>
                  <div class="card-product-widgets-top">
                    <span class="badge product-badge bg-danger">-20%</span>
                    <div class="star-rating ms-auto">
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                    </div>
                  </div>
                  <div class="card-product-widgets-bottom">
                    <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                  </div>
                </div>
                <div class="card-body pb-2">
                  <h3 class="card-product-title text-truncate mb-2">
                    <a href="shop-single.html" class="nav-link">Wide heel suede ankle boots</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <span class="h5 d-inline-block text-danger mb-0">$119.16</span>
                    <del class="d-inline-block ms-2 ps-1 text-muted">$148.95</del>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div>
              <div class="card card-product mx-auto">
                <div class="card-product-img">
                  <a href="shop-single.html" class="card-img-top">
                    <img src="../assets/img/ecommerce/shop/09.jpg" alt="Product image">
                  </a>
                  <div class="card-product-widgets-top">
                    <span class="badge product-badge bg-danger">-50%</span>
                    <div class="star-rating ms-auto">
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star-filled active"></i>
                      <i class="sr-star ci-star"></i>
                    </div>
                  </div>
                  <div class="card-product-widgets-bottom">
                    <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                  </div>
                </div>
                <div class="card-body pb-2">
                  <h3 class="card-product-title text-truncate mb-2">
                    <a href="shop-single.html" class="nav-link">Basic hooded sweatshirt in pink</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <span class="h5 d-inline-block text-danger mb-0">$15.50</span>
                    <del class="d-inline-block ms-2 ps-1 text-muted">$31.00</del>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div>
              <div class="card card-product mx-auto">
                <div class="card-product-img">
                  <a href="shop-single.html" class="card-img-top">
                    <img src="../assets/img/ecommerce/shop/13.jpg" alt="Product image">
                  </a>
                  <div class="card-product-widgets-top">
                    <span class="badge product-badge bg-danger">-60%</span>
                  </div>
                  <div class="card-product-widgets-bottom">
                    <a href="#" class="btn-wishlist ms-auto" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"></a>
                  </div>
                </div>
                <div class="card-body pb-2">
                  <h3 class="card-product-title text-truncate mb-2">
                    <a href="shop-single.html" class="nav-link">Metal bridge sunglasses</a>
                  </h3>
                  <div class="d-flex align-items-center">
                    <span class="h5 d-inline-block text-danger mb-0">$35.98</span>
                    <del class="d-inline-block ms-2 ps-1 text-muted">$89.95</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center pb-3 pt-4 pt-md-5">
          <a href="shop-catalog.html" class="btn btn-outline-primary btn-lg">See all sale products</a>
        </div>
      </section>


      <!-- Mobile app CTA -->
      <section class="bg-dark">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5">
              <img src="../assets/img/ecommerce/home/mobile-app-illustration.png" class="d-block mx-auto my-4 mb-lg-0 mt-lg-n4" width="498" alt="Illustartion">
            </div>
            <div class="col-md-7 col-lg-6 pt-3 pb-5 pt-md-5 pb-md-4 ms-auto">
              <h2 class="text-light text-center text-md-start pb-3">Enjoy mobile shopping with our Createx Store App!</h2>
              <div class="d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-md-start">
                <a href="#" class="btn-market btn-apple mb-3 mx-2 ms-md-0 me-md-3" role="button">
                  <span class="btn-market-subtitle">Download on the</span>
                  <span class="btn-market-title">App Store</span>
                </a>
                <a href="#" class="btn-market btn-google mb-3 mx-2 mx-md-0" role="button">
                  <span class="btn-market-subtitle">Download on the</span>
                  <span class="btn-market-title">Google Play</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Services -->
      <section class="container pt-5 pb-2 pb-sm-5 py-md-5 py-lg-6">
        <div class="row g-0 py-3">
          <div class="col-sm-6 col-md-3 text-center mb-md-0 mb-4 pb-md-0 pb-3">
            <img class="mb-4" src="../assets/img/ecommerce/home/services/delivery.svg" width="48" alt="Worldwide Shipping">
            <h5 class="h5 mb-2">Fast Worldwide Shipping</h5>
            <p class="mb-0 text-muted">Get free shipping over $250</p>
          </div>
          <span class="divider-vertical d-sm-block d-none"></span>
          <div class="col-sm-6 col-md-3 text-center mb-md-0 mb-4 pb-md-0 pb-3">
            <img class="mb-4" src="../assets/img/ecommerce/home/services/support.svg" width="48" alt="Customer Support">
            <h5 class="h5 mb-2">24/7 Customer Support</h5>
            <p class="mb-0 text-muted">Friendly 24/7 customer support</p>
          </div>
          <span class="divider-vertical d-sm-block d-none"></span>
          <div class="col-sm-6 col-md-3 text-center mb-md-0 mb-4 pb-md-0 pb-3">
            <img class="mb-4" src="../assets/img/ecommerce/home/services/guarantee.svg" width="48" alt="Customer Support">
            <h5 class="h5 mb-2">Money Back Guarantee</h5>
            <p class="mb-0 text-muted">We return money within 30 days</p>
          </div>
          <span class="divider-vertical d-sm-block d-none"></span>
          <div class="col-sm-6 col-md-3 text-center mb-md-0 mb-4 pb-md-0 pb-3">
            <img class="mb-4" src="../assets/img/ecommerce/home/services/payment.svg" width="48" alt="Customer Support">
            <h5 class="h5 mb-2">Secure Online Payment</h5>
            <p class="mb-0 text-muted">Accept all major credit cards</p>
          </div>
        </div>
      </section>


      <!-- Insagram -->
      <section class="pt-5 pb-4 pt-lg-6 pb-lg-5 border-top border-bottom">
        <div class="container pt-md-4 pb-2 pt-lg-0 pb-lg-0">
          <div class="row">
            <div class="col-md-4 text-center text-md-start pb-2 pb-md-0 mb-4 mb-md-0">
              <p class="text-dark text-uppercase mb-2">Follow us on Instagram</p>
              <h2 class="h1 pb-2 pb-md-3">@createx_store</h2>
              <a href="#" class="btn btn-outline-primary btn-lg">
                <i class="ci-instagram fs-lg me-1"></i>
                Follow Instagram
              </a>
            </div>
            <div class="col-md-8">
              <div class="tns-carousel-wrapper tns-nav-outside">
                <div class="tns-carousel-inner" data-carousel-options='{
                  "controls": false,
                  "gutter": 15,
                  "responsive": {
                    "0": { "items": 2 },
                    "500": { "items": 3 },
                    "1200": { "items": 3 }
                  }
                }'>
                  <!-- Image -->
                  <div>
                    <img src="../assets/img/ecommerce/home/instagram/01.jpg" alt="Image">
                  </div>
                  <!-- Image -->
                  <div>
                    <img src="../assets/img/ecommerce/home/instagram/02.jpg" alt="Image">
                  </div>
                  <!-- Image -->
                  <div>
                    <img src="../assets/img/ecommerce/home/instagram/03.jpg" alt="Image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Blog -->
      <section class="container mt-2 mt-lg-0 pt-5 pt-lg-6 pb-5 pb-sm-0 pb-md-5">
        <div class="d-flex align-items-center justify-content-between mb-5 pb-sm-2">
          <h2 class="h1 mb-0">Fashion blog</h2>
          <a href="blog.html" class="btn btn-outline-primary">View blog</a>
        </div>
        <div class="tns-carousel-wrapper tns-nav-inverse">
          <div class="tns-carousel-inner" data-carousel-options='{
            "controls": false,
            "gutter": 30,
            "responsive": {
              "0": { "items": 1 },
              "576": { "items": 2 }
            }
          }'>
            <!-- Post -->
            <article class="pb-5">
              <div class="image-scale card shadow-0 border-0">
                <a href="blog-single.html" class="image-inner rounded">
                  <img src="../assets/img/ecommerce/blog/01.jpg" alt="Image">
                </a>
                <div class="card-body px-0">
                  <h3 class="h5 mb-2 pb-1">
                    <a href="blog-single.html" class="nav-link">Bag Trends for Summer 2020</a>
                  </h3>
                  <ul class="nav nav-muted mb-2 pb-1">
                    <li class="nav-item me-2">
                      <a href="#" class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal">
                        Fashion
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a href="#" class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal">
                        November 24, 2020
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a href="#" class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal">
                        <i class="ci-chat mt-n1 me-2 fs-base align-middle"></i>
                        No comments
                      </a>
                    </li>
                  </ul>
                  <p class="d-sm-none d-md-block card-text">Ipsum aliquet nisi, hendrerit rhoncus quam tortor, maecenas faucibus. Tincidunt aliquet sit vel, venenatis nulla. Integer bibendum turpis convallis...</p>
                </div>
              </div>
            </article>

            <!-- Post -->
            <article class="pb-5">
              <div class="image-scale card shadow-0 border-0">
                <a href="blog-single.html" class="image-inner rounded">
                  <img src="../assets/img/ecommerce/blog/03.jpg" alt="Image">
                </a>
                <div class="card-body px-0">
                  <h3 class="h5 mb-2 pb-1">
                    <a href="blog-single.html" class="nav-link">Top 10 of This Season’s Hottest Sneakers</a>
                  </h3>
                  <ul class="nav nav-muted mb-2 pb-1">
                    <li class="nav-item me-2">
                      <a href="#" class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal">
                        Lifestyle
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a href="#" class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal">
                        October 16, 2020
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a href="#" class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal">
                        <i class="ci-chat mt-n1 me-2 fs-base align-middle"></i>
                        4 comments
                      </a>
                    </li>
                  </ul>
                  <p class="d-sm-none d-md-block card-text">Sollicitudin et nec congue magna quis commodo quis luctus risus. Dolor, dignissim semper faucibus quisque massa ut enim. Turpis viverra mattis semper...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>


      <!-- Brands -->
      <section class="container pb-5 pt-lg-2 mb-3 pb-lg-6">
        <div class="tns-carousel-wrapper">
          <div class="tns-carousel-inner" data-carousel-options='{
            "nav": false,
            "controls": false,
            "autoplay": true,
            "autoplayTimeout": 4000,
            "responsive": {
              "0": {
                "items": 2
              },
              "576": {
                "items": 3
              },
              "768": {
                "items": 4
              },
              "992": {
                "items": 5
              },
              "1200": {
                "items": 6
              }
            }
          }'>
            <div class="px-3 text-center">
              <a href="#" class="swap-image">
                <img src="../assets/img/ecommerce/home/brands/vans.svg" class="swap-to" width="120" alt="Brand logo hover">
                <img src="../assets/img/ecommerce/home/brands/vans-g.svg" class="swap-from" width="120" alt="Brand logo">
              </a>
            </div>
            <div class="px-3 text-center">
              <a href="#" class="swap-image">
                <img src="../assets/img/ecommerce/home/brands/diesel.svg" class="swap-to" width="120" alt="Brand logo hover">
                <img src="../assets/img/ecommerce/home/brands/diesel-g.svg" class="swap-from" width="120" alt="Brand logo">
              </a>
            </div>
            <div class="px-3 text-center">
              <a href="#" class="swap-image">
                <img src="../assets/img/ecommerce/home/brands/under-armour.svg" class="swap-to" width="120" alt="Brand logo hover">
                <img src="../assets/img/ecommerce/home/brands/under-armour-g.svg" class="swap-from" width="120" alt="Brand logo">
              </a>
            </div>
            <div class="px-3 text-center">
              <a href="#" class="swap-image">
                <img src="../assets/img/ecommerce/home/brands/columbia.svg" class="swap-to" width="120" alt="Brand logo hover">
                <img src="../assets/img/ecommerce/home/brands/columbia-g.svg" class="swap-from" width="120" alt="Brand logo">
              </a>
            </div>
            <div class="px-3 text-center">
              <a href="#" class="swap-image">
                <img src="../assets/img/ecommerce/home/brands/levis.svg" class="swap-to" width="120" alt="Brand logo hover">
                <img src="../assets/img/ecommerce/home/brands/levis-g.svg" class="swap-from" width="120" alt="Brand logo">
              </a>
            </div>
            <div class="px-3 text-center">
              <a href="#" class="swap-image">
                <img src="../assets/img/ecommerce/home/brands/mango.svg" class="swap-to" width="120" alt="Brand logo hover">
                <img src="../assets/img/ecommerce/home/brands/mango-g.svg" class="swap-from" width="120" alt="Brand logo">
              </a>
            </div>
          </div>
        </div>
      </section>


      <!-- Subscription CTA -->
      <section class="bg-secondary py-5">
        <div class="container pt-2 pt-md-3 pb-3">
          <div class="row align-items-center">
            <form class="col-md-6 col-xl-5 needs-validation" novalidate>
              <h2 class="h1 mb-3">Subscribe for updates</h2>
              <p class="text-muted fs-lg pb-3 mb-4">Subscribe for exclusive early sale access and new arrivals.</p>
              <div class="mb-2">
                <div class="btn-control form-check-inline">
                  <input type="checkbox" class="btn-control-input" id="s-women" checked>
                  <label for="s-women" class="btn-control-label">Women</label>
                </div>
                <div class="btn-control form-check-inline">
                  <input type="checkbox" class="btn-control-input" id="s-men">
                  <label for="s-men" class="btn-control-label">Men</label>
                </div>
                <div class="btn-control form-check-inline">
                  <input type="checkbox" class="btn-control-input" id="s-girls">
                  <label for="s-girls" class="btn-control-label">Girls</label>
                </div>
                <div class="btn-control form-check-inline">
                  <input type="checkbox" class="btn-control-input" id="s-boys">
                  <label for="s-boys" class="btn-control-label">Boys</label>
                </div>
              </div>
              <div class="mb-4 pt-4">
                <label for="s-email" class="form-label-lg">Email</label>
                <div class="input-group input-group-lg">
                  <input type="email" id="s-email" class="form-control" placeholder="Your email address" required>
                  <button type="submit" class="btn btn-primary px-4">Subscribe</button>
                </div>
              </div>
              <div class="form-check">
                <input type="checkbox" id="s-agree" class="form-check-input">
                <label for="s-agree" class="form-check-label fs-base">I agree to receive communications from Createx Store.</label>
              </div>
            </form>
            <div class="col-md-6 col-xl-7 d-none d-md-block">
              <div class="ms-auto" style="max-width: 459px;">
                <img src="../assets/img/ecommerce/subscribe-illustration.png" class="d-block" alt="Illustration">
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection