<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>{{config('app.name')}}</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="{{asset('guest/fonts.googleapis.com/css.css')}}" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('guest/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('guest/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('guest/css/default.css')}}">
</head>

<body class="inner-pages">
<!-- START SECTION HEADINGS -->
@include('guest.common.header')

<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Properties Full Grid</h1>
            <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Properties Full Grid</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION PROPERTIES LISTING -->
<section class="properties-list featured portfolio blog">
    <div class="container">
        <!-- Block heading Start-->
        <div class="block-heading">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-2">
                    <h4>
                            <span class="heading-icon">
                                <i class="fa fa-th-list"></i>
                                </span>
                        <span class="hidden-sm-down">Properties Listing</span>
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
                        <a href="properties-full-list.html" class="change-view-btn lde"><i class="fa fa-th-list"></i></a>
                        <a href="properties-full-grid.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Block heading end -->
        <div class="row featured portfolio-items">
            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="project-bottom">
                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                        </div>
                        <div class="button-effect">
                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a class="img-poppu btn" href="{{asset('guest/images/feature-properties/fp-1.jpg')}}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
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
                    <!-- homes content -->
                    <div class="homes-content">
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
                                <a href="properties-full-grid.html#" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Favorites">
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
            <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="project-bottom">
                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                        </div>
                        <div class="button-effect">
                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a class="img-poppu btn" href="{{asset('guest/images/feature-properties/fp-2.jpg')}}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                        </div>
                        <div class="homes">
                            <!-- homes img -->
                            <a href="properties-details.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button sale rent">For Rent</div>
                                <div class="homes-price">Family Home</div>
                                <img src="{{asset('guest/images/feature-properties/fp-2.jpg')}}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
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
                                <a href="properties-full-grid.html#" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Favorites">
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
            <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="project-bottom">
                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                        </div>
                        <div class="button-effect">
                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a class="img-poppu btn" href="{{asset('guest/images/feature-properties/fp-3.jpg')}}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                        </div>
                        <div class="homes">
                            <!-- homes img -->
                            <a href="properties-details.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button alt sale">For Sale</div>
                                <div class="homes-price">Family Home</div>
                                <img src="{{asset('guest/images/feature-properties/fp-3.jpg')}}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
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
                                <a href="properties-full-grid.html#" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Favorites">
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
            <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes rent">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="project-bottom">
                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                        </div>
                        <div class="button-effect">
                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a class="img-poppu btn" href="images/feature-properties/fp-4.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                        </div>
                        <div class="homes">
                            <!-- homes img -->
                            <a href="properties-details.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button sale rent">For Rent</div>
                                <div class="homes-price">Family Home</div>
                                <img src="{{asset('guest/images/feature-properties/fp-4.jpg')}}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
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
                                <a href="properties-full-grid.html#" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Favorites">
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
            <div class="item col-lg-4 col-md-6 col-xs-12 people sale">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="project-bottom">
                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                        </div>
                        <div class="button-effect">
                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a class="img-poppu btn" href="{{asset('guest/images/feature-properties/fp-5.jpg')}}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                        </div>
                        <div class="homes">
                            <!-- homes img -->
                            <a href="properties-details.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button alt sale">For Sale</div>
                                <div class="homes-price">Family Home</div>
                                <img src="{{asset('guest/images/feature-properties/fp-5.jpg')}}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
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
                                <a href="properties-full-grid.html#" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Favorites">
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
            <div class="item col-lg-4 col-md-6 it2 col-xs-12 web rent">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="project-bottom">
                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                        </div>
                        <div class="button-effect">
                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a class="img-poppu btn" href="{{asset('guest/images/feature-properties/fp-6.jpg')}}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                        </div>
                        <div class="homes">
                            <!-- homes img -->
                            <a href="properties-details.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button sale rent">For Rent</div>
                                <div class="homes-price">Family Home</div>
                                <img src="{{asset('guest/images/feature-properties/fp-6.jpg')}}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
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
                                <a href="properties-full-grid.html#" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Favorites">
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
            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="project-bottom">
                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                        </div>
                        <div class="button-effect">
                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a class="img-poppu btn" href="{{asset('guest/images/feature-properties/fp-7.jpg')}}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                        </div>
                        <div class="homes">
                            <!-- homes img -->
                            <a href="properties-details.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button alt sale">For Sale</div>
                                <div class="homes-price">Family Home</div>
                                <img src="{{asset('guest/images/feature-properties/fp-7.jpg')}}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
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
                                <a href="properties-full-grid.html#" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Favorites">
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
            <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="project-bottom">
                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                        </div>
                        <div class="button-effect">
                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a class="img-poppu btn" href="images/feature-properties/fp-8.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                        </div>
                        <div class="homes">
                            <!-- homes img -->
                            <a href="properties-details.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button sale rent">For Rent</div>
                                <div class="homes-price">Family Home</div>
                                <img src="{{asset('guest/images/feature-properties/fp-8.jpg')}}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
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
                                <a href="properties-full-grid.html#" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Favorites">
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
            <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                <div class="project-single no-mb">
                    <div class="project-inner project-head">
                        <div class="project-bottom">
                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                        </div>
                        <div class="button-effect">
                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a class="img-poppu btn" href="{{asset('guest/images/feature-properties/fp-9.jpg')}}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                        </div>
                        <div class="homes">
                            <!-- homes img -->
                            <a href="properties-details.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button alt sale">For Sale</div>
                                <div class="homes-price">Family Home</div>
                                <img src="{{asset('guest/images/feature-properties/fp-9.jpg')}}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
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
                                <a href="properties-full-grid.html#" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </a>
                                <a href="properties-full-grid.html#" title="Favorites">
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
        </div>
        <nav aria-label="..." class="pt-3">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="properties-full-grid.html#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="properties-full-grid.html#">1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="properties-full-grid.html#">2</a></li>
                <li class="page-item"><a class="page-link" href="properties-full-grid.html#">3</a></li>
                <li class="page-item"><a class="page-link" href="properties-full-grid.html#">3</a></li>
                <li class="page-item"><a class="page-link" href="properties-full-grid.html#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="properties-full-grid.html#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->

<!-- START SECTION NEWSLETTER -->
@include('guest.section.newsletter')
<!-- END SECTION NEWSLETTER -->

<!-- START FOOTER -->
@include('guest.common.footer')
<!-- END FOOTER -->
<!--Style Switcher===========================================-->
<div class="color-switcher" id="choose_color"> <a href="properties-full-grid.html#." class="picker_close"><i class="fa fa-cog fa-spin fa-2x" ></i></a>
    <div class="theme-colours">
        <p class="font-italic">Choose Colour style</p>
        <ul>
            <li>
                <a href="properties-full-grid.html#." class="blue" id="blue"></a>
            </li>
            <li>
                <a href="properties-full-grid.html#." class="pink" id="pink"></a>
            </li>
            <li>
                <a href="properties-full-grid.html#." class="orange" id="orange"></a>
            </li>
            <li>
                <a href="properties-full-grid.html#." class="purple" id="purple"></a>
            </li>
            <li>
                <a href="properties-full-grid.html#." class="green" id="green"></a>
            </li>
            <li>
                <a href="properties-full-grid.html#." class="red" id="red"></a>
            </li>
            <li>
                <a href="properties-full-grid.html#." class="cyan" id="cyan"></a>
            </li>
            <li>
                <a href="properties-full-grid.html#." class="sky-blue" id="sky-blue"></a>
            </li>
            <li>
                <a href="properties-full-grid.html#." class="gray" id="gray"></a>
            </li>
            <li>
                <a href="properties-full-grid.html#." class="brown" id="brown"></a>
            </li>
        </ul>
    </div>
</div>

<!-- ARCHIVES JS -->
<script src="{{asset('guest/js/jquery.min.js')}}"></script>
<script src="{{asset('guest/js/tether.min.js')}}"></script>
<script src="{{asset('guest/js/bootstrap.min.js')}}"></script>
<script src="{{asset('guest/js/smooth-scroll.min.js')}}"></script>
<script src="{{asset('guest/js/lightcase.js')}}"></script>
<script src="{{asset('guest/js/light.js')}}"></script>
<script src="{{asset('guest/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('guest/js/popup.js')}}"></script>
<script src="{{asset('guest/js/ajaxchimp.min.js')}}"></script>
<script src="{{asset('guest/js/newsletter.js')}}"></script>
<script src="{{asset('guest/js/inner.js')}}"></script>
<script src="{{asset('guest/js/color-switcher.js')}}"></script>
</body>

</html>
