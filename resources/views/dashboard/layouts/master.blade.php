<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <title>Moss - Multipurpose Admin Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css">

    <link rel="shortcut icon" href="/assets/images/logo-square.png" type="image/png">
    <link rel="icon" href="/assets/images/logo-square.png" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.23.1/apexcharts.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet">
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- CSS only -->
    @livewireStyles
    @stack('styles')
    @yield('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css"
        integrity="sha512-l7qZAq1JcXdHei6h2z8h8sMe3NbMrmowhOl+QkP3UhifPpCW2MC4M0i26Y8wYpbz1xD9t61MLT9L1N773dzlOA=="
        crossorigin="anonymous" />

</head>
</head>

@yield('styles')

<body>
    <div class="overlay-mask"></div>
    <div class="main-wrapper ">
        @include('dashboard.layouts.sidebar')
        <div class="right-area">
            <header>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item icon">
                            <button class="hamburger" id="hamburger-btn">
                                <span class="material-icons">menu</span>
                            </button>
                        </li>


                        <li class="nav-item d-sm-none d-none d-md-block">
                            <a href="#" class="nav-link">
                                <i class="material-icons align-middle">add</i> New
                            </a>
                        </li>
                        <li class="nav-item d-sm-none d-none d-md-block">
                            <a href="#" class="nav-link">Quick Link</a>
                        </li>
                        <li class="flex-fill"></li>
                        <li class="nav-item search-bar" id="search-bar">
                            <form class="form-inline big-search" method="POST" onsubmit="return false;">
                                <button class="btn btn-navbar" id="closeSearchBtn">
                                    <span class="material-icons">arrow_back</span>
                                </button>
                                <input class="form-control" type="search" placeholder="Search..." aria-label="Search">
                                <div class="backdrop"></div>
                            </form>
                        </li>
                        <li class="nav-item icon">
                            <button class="nav-link" id="searchBtn">
                                <span class="material-icons">search</span>
                            </button>
                        </li>
                        <li class="nav-item icon">
                            <button class="nav-link" id="fullscreen-btn">
                                <span class="material-icons">fullscreen</span>
                            </button>
                        </li>

                        <li class="nav-item icon">
                            <button class="nav-link pulse" id="navbarDropdown" data-toggle="dropdown" data-offset="0"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="material-icons">notifications</span>
                            </button>
                            <div class="dropdown-menu p-0 dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <div class="d-flex p-3 bg-white justify-content-between border-bottom ">
                                    <h3 class="m-0">Notifications</h3>
                                    <p class="float-right m-0">
                                        <a href="javascript:void()">Mark all as read</a>
                                    </p>
                                </div>
                                <div class="notification-list p-3">
                                    <div class="card shadow-lg mb-3">
                                        <div class="card-body">
                                            All systems operational.
                                            <small class="d-block">3 mins ago</small>
                                        </div>
                                    </div>
                                    <div class="card shadow-lg mb-3">
                                        <div class="card-body"> File upload successful.<small
                                                class="d-block">5 mins ago</small>
                                        </div>
                                    </div>
                                    <div class="card shadow-lg mb-3">
                                        <div class="card-body">
                                            Your holiday has been denied
                                            <small class="d-block">10 mins ago</small>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </li>
                        <!-- Messages Dropdown Menu -->
                        <li class="nav-item dropdown with-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <div class="avatar avatar-sm avatar-dnd bg-primary">
                                    <img src="assets/images/avatar/team-4.jpg"
                                        class="avatar-img align-top rounded-circle" alt="">
                                </div>
                            </a>
                            <div class="dropdown-menu p-1 dropdown-menu-right">
                                <span class="dropdown-item">
                                    Welcome John
                                </span>
                                <a href="#" class="dropdown-item">
                                    Logout
                                </a>
                                <div class="dropdown-divider"></div>
                                <span class="dropdown-item-text">
                                    Build Version: v1.0.1
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="main-content container">
                <div class="page-header">
                    <div>
                        <span class="h2">{{ $pageHeader ?? 'Dashboard' }}</span>
                        <small>{{ $descriptionHeader ?? 'Be a best seller...' }}</small>
                    </div>
                </div>
                <hr class="mt-3 mb-3">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="/assets/js/vendor.bundle.js"></script>


    <script src="/assets/js/app.bundle.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

    <script src="/assets/js/demo/dashboard.bundle.js"></script>

    <!-- include summernote css/js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"
        integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    </script>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <x-livewire-alert::scripts />
    @yield('scripts')
    @stack('scripts')

    <script>
        @if (!Route::is('dashboard.product.edit') || Route::is('dashboard.product.create'))
            localStorage.removeItem('ClassActive');
            localStorage.removeItem('ClassActiveShow');
        @endif
    </script>
</body>

</html>
