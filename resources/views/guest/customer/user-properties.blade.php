@extends('guest.layouts.app')
@section('my_css')
    <link rel="stylesheet" href="{{asset('guest/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/lightcase.css')}}">
@endsection
@section('content')
<!-- START SECTION PROPERTIES LISTING -->
<section class="properties-right list featured portfolio blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 blog-pots">
                <!-- Block heading Start-->
                <div class="block-heading">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-2">
                            <h4>
                                <span class="heading-icon">
                                <i class="fa fa-th-list"></i>
                                </span>
                                <span class="hidden-sm-down">@lang(" Mes Proprietés ")</span>
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-7 col-10 cod-pad">
                            <div class="sorting-options">
                                <select class="sorting">
                                    <option>Price: High to low</option>
                                    <option>Price: Low to high</option>
                                    <option>Sells: High to low</option>
                                    <option>Sells: Low to high</option>
                                </select>
                                <a href="" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="" class="change-view-btn lde"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block heading end -->
                <div class="row featured portfolio-items">
                    <div class="item col-lg-5 col-md-12 col-xs-12 landscapes sale pr-0 pb-0">
                        <div class="project-single mb-0 bb-0">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="">@lang("Details ")</a><span class="category">Real Estate</span></h4>
                                </div>
                                <div class="button-effect">
                                    <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a class="img-poppu btn" href="images/feature-properties/fp-1.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="properties-details.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button alt sale">For Sale</div>
                                        <div class="homes-price">Family Home</div>
                                        <img src="{{asset('guest/images/feature-properties/fp-1.jpg')}}" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="col-lg-7 col-md-12 homes-content pb-0 mb-44">
                        <!-- homes address -->
                        <h3>Real House Luxury Villa</h3>
                        <p class="homes-address mb-3">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix">
                            <li>
                                <i class="fa fa-bed" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li>
                                <i class="fa fa-bath" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li>
                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li>
                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <!-- Price -->
                        <div class="price-properties">
                            <h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                            </h3>
                            <div class="compare">
                                <a href="properties-list-right-sidebar.html#" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="properties-list-right-sidebar.html#" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="properties-list-right-sidebar.html#" title="Favorites">
                                    <i class="fa fa-heart-o"></i>
                                </a>
                            </div>
                        </div>
                        <div class="footer">
                            <a href="agent-details.html">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                            <i class="fa fa-calendar"></i> 2 months ago
                        </span>
                        </div>
                    </div>
                    <div class="item col-lg-5 col-md-12 col-xs-12 landscapes sale pr-0 pb-0 my-44 ft">
                        <div class="project-single mb-0 bb-0">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                                </div>
                                <div class="button-effect">
                                    <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a class="img-poppu btn" href="images/feature-properties/fp-2.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="properties-details.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button alt sale">For Sale</div>
                                        <div class="homes-price">Family Home</div>
                                        <img src="images/feature-properties/fp-2.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="col-lg-7 col-md-12 homes-content pb-0 my-44 ft mb-44">
                        <!-- homes address -->
                        <h3>Real House Luxury Villa</h3>
                        <p class="homes-address mb-3">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix">
                            <li>
                                <i class="fa fa-bed" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li>
                                <i class="fa fa-bath" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li>
                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li>
                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <!-- Price -->
                        <div class="price-properties">
                            <h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                            </h3>
                            <div class="compare">
                                <a href="properties-list-right-sidebar.html#" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="properties-list-right-sidebar.html#" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="properties-list-right-sidebar.html#" title="Favorites">
                                    <i class="fa fa-heart-o"></i>
                                </a>
                            </div>
                        </div>
                        <div class="footer">
                            <a href="agent-details.html">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                            <i class="fa fa-calendar"></i> 2 months ago
                        </span>
                        </div>
                    </div>
                    <div class="item col-lg-5 col-md-12 col-xs-12 landscapes sale pr-0 pb-0">
                        <div class="project-single mb-0 bb-0">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                                </div>
                                <div class="button-effect">
                                    <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a class="img-poppu btn" href="images/feature-properties/fp-3.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="properties-details.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button alt sale">For Sale</div>
                                        <div class="homes-price">Family Home</div>
                                        <img src="images/feature-properties/fp-3.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- homes content -->

                    <!-- homes content -->

                    <!-- homes content -->
                    <!-- homes content -->
                    <div class="col-lg-7 col-md-12 homes-content pb-0 my-44 ft mb-44">
                        <!-- homes address -->
                        <h3>Real House Luxury Villa</h3>
                        <p class="homes-address mb-3">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix">
                            <li>
                                <i class="fa fa-bed" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li>
                                <i class="fa fa-bath" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li>
                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li>
                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <!-- Price -->
                        <div class="price-properties">
                            <h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                            </h3>
                            <div class="compare">
                                <a href="properties-list-right-sidebar.html#" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="properties-list-right-sidebar.html#" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="properties-list-right-sidebar.html#" title="Favorites">
                                    <i class="fa fa-heart-o"></i>
                                </a>
                            </div>
                        </div>
                        <div class="footer">
                            <a href="agent-details.html">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                            <i class="fa fa-calendar"></i> 2 months ago
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="col-lg-3 col-md-12 car">
                <div class="widget">
                    <div class="section-heading">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                                <h5>Search Properties</h5>
                                <div class="border"></div>
                                <p>Search your Properties</p>
                            </div>
                        </div>
                    </div>
                    <!-- Search Fields -->
                    <div class="main-search-field">
                        <h5 class="title">Filter</h5>
                        <form method="GET">
                            <div class="at-col-default-mar">
                                <select>
                                    <option value="0" selected>Location</option>
                                    <option value="1">New York</option>
                                    <option value="2">Los Angeles</option>
                                    <option value="3">Chicago</option>
                                    <option value="4">Philadelphia</option>
                                    <option value="5">San Francisco</option>
                                </select>
                            </div>
                            <div class="at-col-default-mar">
                                <select class="div-toggle" data-target=".my-info-1">
                                    <option value="0" data-show=".acitveon" selected>Property Status</option>
                                    <option value="1" data-show=".sale">For Sale</option>
                                    <option value="2" data-show=".rent">For Rent</option>
                                    <option value="3" data-show=".rent">Sold</option>
                                </select>
                            </div>
                            <div class="at-col-default-mar">
                                <div class="at-col-default-mar">
                                    <select>
                                        <option value="0" selected>Property Type</option>
                                        <option value="1">Family House</option>
                                        <option value="2">Apartment</option>
                                        <option value="3">Condo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="at-col-default-mar">
                                <select>
                                    <option value="0" selected>Beds</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="at-col-default-mar">
                                <select>
                                    <option value="0" selected>Baths</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="col-lg-12 no-pds">
                                <div class="at-col-default-mar">
                                    <input class="at-input" type="text" name="min-area" placeholder="Squre Fit Min">
                                </div>
                            </div>
                            <div class="col-lg-12 no-pds my-4">
                                <div class="at-col-default-mar">
                                    <input class="at-input" type="text" name="max-area" placeholder="Squre Fit Max">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Price Fields -->
                    <div class="main-search-field-2">
                        <div class="range-slider">
                            <input type="text" disabled class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10">
                            <div class="slider-range"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 no-pds">
                        <div class="at-col-default-mar">
                            <button class="btn btn-default hvr-bounce-to-right" type="submit">Search</button>
                        </div>
                    </div>
                    <div class="recent-post py-5">
                        <h5 class="font-weight-bold mb-4">Recent Properties</h5>
                        <div class="recent-main">
                            <div class="recent-img">
                                <a href="blog-details.html"><img src="images/feature-properties/fp-1.jpg" alt=""></a>
                            </div>
                            <div class="info-img">
                                <a href="blog-details.html"><h6>Family Home</h6></a>
                                <p>$230,000</p>
                            </div>
                        </div>
                        <div class="recent-main my-4">
                            <div class="recent-img">
                                <a href="blog-details.html"><img src="images/feature-properties/fp-2.jpg" alt=""></a>
                            </div>
                            <div class="info-img">
                                <a href="blog-details.html"><h6>Family Home</h6></a>
                                <p>$230,000</p>
                            </div>
                        </div>
                        <div class="recent-main">
                            <div class="recent-img">
                                <a href="blog-details.html"><img src="images/feature-properties/fp-3.jpg" alt=""></a>
                            </div>
                            <div class="info-img">
                                <a href="blog-details.html"><h6>Family Home</h6></a>
                                <p>$230,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <h5 class="font-weight-bold mb-4">Popolar Tags</h5>
                        <div class="tags">
                            <span><a href="properties-list-right-sidebar.html#" class="btn btn-outline-primary">Houses</a></span>
                            <span><a href="properties-list-right-sidebar.html#" class="btn btn-outline-primary">Real Home</a></span>
                        </div>
                        <div class="tags">
                            <span><a href="properties-list-right-sidebar.html#" class="btn btn-outline-primary">Baths</a></span>
                            <span><a href="properties-list-right-sidebar.html#" class="btn btn-outline-primary">Beds</a></span>
                        </div>
                        <div class="tags">
                            <span><a href="properties-list-right-sidebar.html#" class="btn btn-outline-primary">Garages</a></span>
                            <span><a href="properties-list-right-sidebar.html#" class="btn btn-outline-primary">Family</a></span>
                        </div>
                        <div class="tags">
                            <span><a href="properties-list-right-sidebar.html#" class="btn btn-outline-primary">Real Estates</a></span>
                            <span><a href="properties-list-right-sidebar.html#" class="btn btn-outline-primary">Properties</a></span>
                        </div>
                        <div class="tags">
                            <span><a href="properties-list-right-sidebar.html#" class="btn btn-outline-primary">Location</a></span>
                            <span><a href="properties-list-right-sidebar.html#" class="btn btn-outline-primary">Price</a></span>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="properties-list-right-sidebar.html#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="properties-list-right-sidebar.html#">1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="properties-list-right-sidebar.html#">2</a></li>
                <li class="page-item"><a class="page-link" href="properties-list-right-sidebar.html#">3</a></li>
                <li class="page-item"><a class="page-link" href="properties-list-right-sidebar.html#">3</a></li>
                <li class="page-item"><a class="page-link" href="properties-list-right-sidebar.html#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="properties-list-right-sidebar.html#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->
@endsection
@section('my_scripts')
    <script src="{{asset('guest/js/jquery-ui.js')}}"></script>
    <script src="{{asset('guest/js/range-slider.js')}}"></script>

    <script src="{{asset('guest/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('guest/js/popup.js')}}"></script>
    <script src="{{asset('guest/js/lightcase.js')}}"></script>
    <script src="{{asset('guest/js/light.js')}}"></script>
    <script src="{{asset('guest/js/inner.js')}}"></script>
@endsection
