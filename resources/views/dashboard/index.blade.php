@extends('dashboard.layouts.master')
@section('content')

        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-uppercase text-muted mb-0 card-title">Average Sales</h5><span class="h1 font-weight-bold mb-0">50,897</span>
                            </div>
                            <div class="col-auto col">
                                <div>
                                    <button class="btn btn-transparent-primary btn-lg btn-circle">

                                        <i class="material-icons">monetization_on</i>
                                    </button>

                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">

                            <span class="text-nowrap">this month</span>
                            <span class="text-success float-right ml-2"> <i class="fa fa-arrow-up"></i>
                                8%</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-uppercase text-muted mb-0 card-title">Total Sales</h5><span class="h1 font-weight-bold mb-0">550,897</span>
                            </div>
                            <div class="col-auto col">
                                <div>
                                    <button class="btn btn-transparent-primary btn-lg btn-circle">

                                        <i class="material-icons">trending_up</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">

                            <span class="text-nowrap ">since last month</span>
                            <span class="text-success float-right ml-2">
                                <i class="fa fa-arrow-up"></i>
                                3.48%</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-uppercase text-muted mb-0 card-title">INQUIRIES</h5><span class="h1 font-weight-bold mb-0">750,897</span>
                            </div>
                            <div class="col-auto col">
                                <div>
                                    <button class="btn btn-transparent-primary btn-lg btn-circle">
                                        <i class="material-icons">language</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-nowrap">since last month</span>
                            <span class="text-danger float-right ml-2"> <i class="fa fa-arrow-down"></i>
                                3.48%</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-uppercase text-muted mb-0 card-title">Invoices</h5><span class="h1 font-weight-bold mb-0">897</span>
                            </div>
                            <div class="col-auto col">
                                <div>
                                    <button class="btn btn-transparent-primary btn-lg btn-circle">
                                        <i class="material-icons">receipt</i>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-nowrap">since last month</span>
                            <span class="text-danger float-right ml-2"> <i class="fa fa-arrow-down"></i>
                                3.48%</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <div class="card shadow">
                    <div class="card-body">

                        <h3 class="card-title mb-4 float-sm-left">Total Sales</h3>
                        <button class="btn btn-sm btn-light btn-circle btn-ripple btn-icon float-sm-right">
                            <i class="material-icons">more_vert</i>
                        </button>

                        <div id="line-column-area-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Total Sales</h3>
                        <canvas id="chart-area" class="chart-canvas mx-auto" height="260"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card shadow">

                    <div class="card-body p-0">
                        <div class="card-header bg-white">
                            Product Demand
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Brand</th>
                                        <th>Popularity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Samsung
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Apple
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Oppo
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Vivo
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            OnePlus
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <div class="card shadow">
                    <div class="card-body">
                        <div>
                            <h3 class="card-title mb-4 float-sm-left">Average Sales</h3>
                            <ul class="nav nav-pills float-sm-right">
                                <li class="nav-item">
                                    <a class="nav-link btm-sm" href="#">Weekly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btm-sm active" href="#">Monthly</a>
                                </li>
                            </ul>
                        </div>
                        <div id="bar-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title mb-4 float-sm-left">Peak Sales</h3>
                        <div id="chart">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Product Stock</h4>
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <thead class="thead-light rounded">
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">In Stock</th>
                                        <th scope="col">Agent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/product/a.png" class="avatar avatar-sm mr-2" alt="Samsung Galaxy S20"> Samsung Galaxy S20

                                        </td>

                                        <td class="align-middle">$32</td>
                                        <td class="align-middle">24</td>
                                        <td class="align-middle">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                                <label class="custom-control-label" for="customSwitch1">
                                                </label>
                                            </div>

                                        </td>
                                        <td class="align-middle">Mark</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/product/b.png" class="avatar avatar-sm mr-2" alt="iPhone 12 Pro"> iPhone 12 Pro
                                        </td>

                                        <td class="align-middle">$52</td>
                                        <td class="align-middle">58</td>
                                        <td class="align-middle">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="align-middle">John</td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/product/c.png" class="avatar avatar-sm mr-2" alt="OnePlus 8"> OnePlus 8
                                        </td>

                                        <td class="align-middle">$79</td>
                                        <td class="align-middle">5</td>
                                        <td class="align-middle">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                                <label class="custom-control-label" for="customSwitch3">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="align-middle">John</td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/product/d.png" class="avatar avatar-sm mr-2" alt="Vivo F17 Pro"> Vivo F17 Pro
                                        </td>

                                        <td class="align-middle">$52</td>
                                        <td class="align-middle">58</td>
                                        <td class="align-middle">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                                <label class="custom-control-label" for="customSwitch4">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="align-middle">John</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-white">
                        Track Order
                    </div>
                    <div class="card-body p-4 ml-3">
                        <div class="timeline timeline-one-side" data-timeline-axis-style="dashed" data-timeline-content="axis">
                            <div class="timeline-block">
                                <span class="timeline-step badge-success">
                                    <i class="material-icons f-12">today</i>
                                </span>
                                <div class="timeline-content">

                                    <h5 class="mb-0 font-weight-bold">Order has Dispatched</h5>
                                    <small class="text-muted ">10:30
                                        AM</small>
                                    <p class="text-sm mt-1 mb-0">Product has dispatched from vendor.
                                    </p>

                                </div>
                            </div>
                            <div class="timeline-block"><span class="timeline-step badge-danger"><i class="material-icons f-12">alarm</i></span>
                                <div class="timeline-content">
                                    <h5 class="mb-0 font-weight-bold">Order Picked Up</h5>
                                    <small class="text-muted ">14:30
                                        AM</small>
                                    <p class="text-sm mt-1 mb-0">Order picked up from delivery partner
                                    </p>

                                </div>
                            </div>
                            <div class="timeline-block">
                                <span class="timeline-step badge-info"><i class="material-icons f-12">thumb_up</i></span>
                                <div class="timeline-content">
                                    <h5 class="mb-0 font-weight-bold">Order received at nearest hub</h5>
                                    <small class="text-muted">10:30
                                        AM</small>
                                    <p class="text-sm mt-1 mb-0">Order received at nearest hub in your city
                                    </p>

                                </div>
                            </div>
                            <div class="timeline-block"><span class="timeline-step badge-success"><i class="material-icons f-12">bookmarks</i></span>
                                <div class="timeline-content">
                                    <h5 class="mb-0 font-weight-bold">Out for delivery</h5>
                                    <small class="text-muted">15:30
                                        AM</small>
                                    <p class="text-sm mt-1 mb-0">Order will be delivered around 5 PM.
                                    </p>

                                </div>
                            </div>
                            <div class="timeline-block"><span class="timeline-step badge-danger"><i class="material-icons f-12">grade</i></span>
                                <div class="timeline-content">
                                    <h5 class="mb-0 font-weight-bold">Order delivered</h5>
                                    <small class="text-muted">16:55
                                        AM</small>
                                    <p class="text-sm mt-1 mb-0">Order delivered at 4:55 PM.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-white">
                        Google Maps
                        <div class="tools">

                            <button class="btn btn-square toggle-fullscreen">
                                <i class="material-icons">fullscreen</i>
                                <i class="material-icons">fullscreen_exit</i>
                            </button>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="m-0 p-0 overflow-hidden">
                            <iframe class="border-none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.1160991881!2d72.74109908908066!3d19.082197838926515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9409a609d75%3A0xd0a71c45e7557bfa!2sBasilica%20Of%20Our%20Lady%20of%20The%20Mount!5e0!3m2!1sen!2sin!4v1607597877463!5m2!1sen!2sin" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Online Transaction</h4>
                        <div class="table-responsive">
                            <table class="table table-borderless table-centered table-nowrap mb-0">
                                <thead class="thead-light rounded">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Order ID</th>
                                        <th>Buyer Name</th>
                                        <th>Order Date</th>
                                        <th>Total</th>
                                        <th>Payment Status</th>
                                        <th>Shipping Status</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#FO225510</a> </td>
                                        <td>Harsh Pete</td>
                                        <td>
                                            10 Oct, 2019
                                        </td>
                                        <td>
                                            $40
                                        </td>
                                        <td>
                                            <span class="badge badge-transparent-danger p-2">Chargeback</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary">Shipped</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <i class="material-icons f-16">visibility</i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#FO225511</a> </td>
                                        <td>Meet Cook</td>
                                        <td>
                                            11 Oct, 2019
                                        </td>
                                        <td>
                                            $38
                                        </td>
                                        <td>
                                            <span class="badge badge-transparent-success p-2">Paid</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning"> Pending</span>
                                        </td>
                                        <td>

                                            <button type="button" class="btn btn-primary btn-sm">
                                                <i class="material-icons f-16">visibility</i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#FO225512</a> </td>
                                        <td>Jam Mitche</td>
                                        <td>
                                            12 Oct, 2019
                                        </td>
                                        <td>
                                            $38
                                        </td>
                                        <td>
                                            <span class="badge badge-transparent-warning p-2">Pending</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-success"> Delivered</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <i class="material-icons f-16">visibility</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#FO225513</a> </td>
                                        <td>Brain Dick</td>
                                        <td>
                                            13 Oct, 2019
                                        </td>
                                        <td>
                                            $41
                                        </td>
                                        <td>
                                            <span class="badge badge-transparent-danger p-2">Return</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Returned</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <i class="material-icons f-16">visibility</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#FO225514</a> </td>
                                        <td>Ronaldo teen</td>
                                        <td>
                                            14 Oct, 2019
                                        </td>
                                        <td>
                                            $40
                                        </td>
                                        <td>
                                            <span class="badge badge-transparent-success p-2">Return</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">Shipped</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <i class="material-icons f-16">visibility</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#FO225515</a> </td>
                                        <td>Jac Brusli</td>
                                        <td>
                                            15 Oct, 2019
                                        </td>
                                        <td>
                                            $392
                                        </td>
                                        <td>
                                            <span class="badge badge-transparent-dark p-2">Cancelled</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Delivered</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <i class="material-icons f-16">visibility</i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>

        </div>


@endsection