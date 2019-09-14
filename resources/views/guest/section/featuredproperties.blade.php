<!-- START SECTION FEATURED PROPERTIES -->
<section class="featured portfolio">
    <div class="container">
        <div class="row">
            <div class="section-title col-md-5">
                <h3>@lang("Liste de tous les  Biens ")</h3>
                <h2>@lang("Biens")</h2>
            </div>
        </div>
        <div class="row portfolio-items">
            @foreach ($properties as $property )
                @foreach ($property->assignment  as $assign)
            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
{{--                <div class="project-single">--}}
{{--                    <div class="project-inner project-head">--}}
{{--                        <div class="project-bottom">--}}
{{--                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>--}}
{{--                        </div>--}}
{{--                        <div class="button-effect">--}}
{{--                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>--}}
{{--                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>--}}
{{--                            <a class="img-poppu btn" href="images/feature-properties/fp-1.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="homes">--}}
{{--                            <!-- homes img -->--}}
{{--                            <a href="properties-details.html" class="homes-img">--}}
{{--                                <div class="homes-tag button alt featured">Featured</div>--}}
{{--                                <div class="homes-tag button alt sale">For Sale</div>--}}
{{--                                <div class="homes-price">Family Home</div>--}}
{{--                                <img src="{{asset('guest/images/feature-properties/fp-1.jpg')}}" alt="home-1" class="img-responsive">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- homes content -->--}}
{{--                    <div class="homes-content">--}}
{{--                        <!-- homes address -->--}}
{{--                        <h3>Real House Luxury Villa</h3>--}}
{{--                        <p class="homes-address mb-3">--}}
{{--                            <a href="properties-details.html">--}}
{{--                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>--}}
{{--                            </a>--}}
{{--                        </p>--}}
{{--                        <!-- homes List -->--}}
{{--                        <ul class="homes-list clearfix">--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                <span>6 Bedrooms</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                <span>3 Bathrooms</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-object-group" aria-hidden="true"></i>--}}
{{--                                <span>720 sq ft</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fas fa-warehouse" aria-hidden="true"></i>--}}
{{--                                <span>2 Garages</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <!-- Price -->--}}
{{--                        <div class="price-properties">--}}
{{--                            <h3 class="title mt-3">--}}
{{--                                <a href="properties-details.html">$ 230,000</a>--}}
{{--                            </h3>--}}
{{--                            <div class="compare">--}}
{{--                                <a href="index.html#" title="Compare">--}}
{{--                                    <i class="fas fa-exchange-alt"></i>--}}
{{--                                </a>--}}
{{--                                <a href="index.html#" title="Share">--}}
{{--                                    <i class="fas fa-share-alt"></i>--}}
{{--                                </a>--}}
{{--                                <a href="index.html#" title="Favorites">--}}
{{--                                    <i class="fa fa-heart-o"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="footer">--}}
{{--                            <a href="agent-details.html">--}}
{{--                                <i class="fa fa-user"></i> Jhon Doe--}}
{{--                            </a>--}}
{{--                            <span>--}}
{{--                                <i class="fa fa-calendar"></i> 2 months ago--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="project-bottom">
                            <h4><a href="{{route('reserver.create',
                                            ['property_id'=>$property->id,
                                             'property_name'=>$property->name
                                            ])}}">@lang("Voir Bien ")</a><span
                                    class="category">{{$property->propertytype['name']}}</span></h4>
                        </div>
                        <div class="button-effect">
                            <a href="" class="btn"><i
                                    class="fa fa-link"></i></a>
                            <a href="" class="btn popup-video popup-youtube"><i
                                    class="fas fa-video"></i></a>
                            <a class="img-poppu btn"
                               href="{{asset('storage/images/'.$property->images[0]->resizedfilename)}}"
                               data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                        </div>
                        <div class="homes">
                            <!-- homes img -->
                            <a href="" class="homes-img">
                                <div class="homes-tag button alt featured">@lang("Tendances")</div>
                                @foreach($property->typetransactions as $typetrans)
                                    <div class="homes-tag button alt sale">{{$typetrans->name}}</div>
                                @endforeach
                                <div class="homes-price">  @lang("Info") </div>
                                <img
                                    src="{{asset('storage/images/'.$property->images[0]->resizedfilename)}}"
                                    alt="home-1" class="img-responsive"
                                    height="750" width="1000">
                            </a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3>{{$property->name}}</h3>
                        <p class="homes-address mb-3">
                            <a href="">
                                <i class="fa fa-map-marker"></i><span>{{substr($property->adresse,0,28)}}...</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix">
                            <li>
                                <i class="fa fa-bed" aria-hidden="true"></i>
                                <span>{{$property->rooms}} @lang("Chambre")</span>
                            </li>
                            <li>
                                <i class="fa fa-bath" aria-hidden="true"></i>
                                <span> {{$property->bathRooms}} @lang("Douche")</span>
                            </li>
                            <li>
                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                <span>{{$property->area}} m<sup>2</sup> </span>
                            </li>
                            <li>
                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                <span> {{$property->garages}} @lang("Garage") </span>
                            </li>
                        </ul>
                        <!-- Price -->
                        @foreach($property->typetransactions as $typetrans)
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                    <a href="">{{$typetrans->pivot->ammount}} CFA</a>
                                </h3>
                                <div class="compare">
                                    <a href="" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="footer">
                                <a href="">
                                    <i class="fa fa-user"></i>
                                </a>
                                <span>
                                   <i class="fa fa-calendar"></i> {{$typetrans->pivot->created_at}}
                                        </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
                    @endforeach
            @endforeach
{{--            <div class="item col-lg-4 col-md-6 col-xs-12 people rent">--}}
{{--                <div class="project-single">--}}
{{--                    <div class="project-inner project-head">--}}
{{--                        <div class="project-bottom">--}}
{{--                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>--}}
{{--                        </div>--}}
{{--                        <div class="button-effect">--}}
{{--                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>--}}
{{--                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>--}}
{{--                            <a class="img-poppu btn" href="images/feature-properties/fp-2.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="homes">--}}
{{--                            <!-- homes img -->--}}
{{--                            <a href="properties-details.html" class="homes-img">--}}
{{--                                <div class="homes-tag button alt featured">Featured</div>--}}
{{--                                <div class="homes-tag button sale rent">For Rent</div>--}}
{{--                                <div class="homes-price">Family Home</div>--}}
{{--                                <img src="{{asset('guest/images/feature-properties/fp-2.jpg')}}" alt="home-1" class="img-responsive">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- homes content -->--}}
{{--                    <div class="homes-content">--}}
{{--                        <!-- homes address -->--}}
{{--                        <h3>Real House Luxury Villa</h3>--}}
{{--                        <p class="homes-address mb-3">--}}
{{--                            <a href="properties-details.html">--}}
{{--                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>--}}
{{--                            </a>--}}
{{--                        </p>--}}
{{--                        <!-- homes List -->--}}
{{--                        <ul class="homes-list clearfix">--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                <span>6 Bedrooms</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                <span>3 Bathrooms</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-object-group" aria-hidden="true"></i>--}}
{{--                                <span>720 sq ft</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fas fa-warehouse" aria-hidden="true"></i>--}}
{{--                                <span>2 Garages</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <!-- Price -->--}}
{{--                        <div class="price-properties">--}}
{{--                            <h3 class="title mt-3">--}}
{{--                                <a href="properties-details.html">$ 230,000</a>--}}
{{--                            </h3>--}}
{{--                            <div class="compare">--}}
{{--                                <a href="index.html#" title="Compare">--}}
{{--                                    <i class="fas fa-exchange-alt"></i>--}}
{{--                                </a>--}}
{{--                                <a href="index.html#" title="Share">--}}
{{--                                    <i class="fas fa-share-alt"></i>--}}
{{--                                </a>--}}
{{--                                <a href="index.html#" title="Favorites">--}}
{{--                                    <i class="fa fa-heart-o"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="footer">--}}
{{--                            <a href="agent-details.html">--}}
{{--                                <i class="fa fa-user"></i> Jhon Doe--}}
{{--                            </a>--}}
{{--                            <span>--}}
{{--                                <i class="fa fa-calendar"></i> 2 months ago--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">--}}
{{--                <div class="project-single">--}}
{{--                    <div class="project-inner project-head">--}}
{{--                        <div class="project-bottom">--}}
{{--                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>--}}
{{--                        </div>--}}
{{--                        <div class="button-effect">--}}
{{--                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>--}}
{{--                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>--}}
{{--                            <a class="img-poppu btn" href="{{asset('guest/images/feature-properties/fp-3.jpg')}}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="homes">--}}
{{--                            <!-- homes img -->--}}
{{--                            <a href="properties-details.html" class="homes-img">--}}
{{--                                <div class="homes-tag button alt featured">Featured</div>--}}
{{--                                <div class="homes-tag button alt sale">For Sale</div>--}}
{{--                                <div class="homes-price">Family Home</div>--}}
{{--                                <img src="{{asset('guest/images/feature-properties/fp-3.jpg')}}" alt="home-1" class="img-responsive">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- homes content -->--}}
{{--                    <div class="homes-content">--}}
{{--                        <!-- homes address -->--}}
{{--                        <h3>Real House Luxury Villa</h3>--}}
{{--                        <p class="homes-address mb-3">--}}
{{--                            <a href="properties-details.html">--}}
{{--                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>--}}
{{--                            </a>--}}
{{--                        </p>--}}
{{--                        <!-- homes List -->--}}
{{--                        <ul class="homes-list clearfix">--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                <span>6 Bedrooms</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                <span>3 Bathrooms</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-object-group" aria-hidden="true"></i>--}}
{{--                                <span>720 sq ft</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fas fa-warehouse" aria-hidden="true"></i>--}}
{{--                                <span>2 Garages</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <!-- Price -->--}}
{{--                        <div class="price-properties">--}}
{{--                            <h3 class="title mt-3">--}}
{{--                                <a href="properties-details.html">$ 230,000</a>--}}
{{--                            </h3>--}}
{{--                            <div class="compare">--}}
{{--                                <a href="index.html#" title="Compare">--}}
{{--                                    <i class="fas fa-exchange-alt"></i>--}}
{{--                                </a>--}}
{{--                                <a href="index.html#" title="Share">--}}
{{--                                    <i class="fas fa-share-alt"></i>--}}
{{--                                </a>--}}
{{--                                <a href="index.html#" title="Favorites">--}}
{{--                                    <i class="fa fa-heart-o"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="footer">--}}
{{--                            <a href="agent-details.html">--}}
{{--                                <i class="fa fa-user"></i> Jhon Doe--}}
{{--                            </a>--}}
{{--                            <span>--}}
{{--                                <i class="fa fa-calendar"></i> 2 months ago--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes rent no-pb">--}}
{{--                <div class="project-single no-mb">--}}
{{--                    <div class="project-inner project-head">--}}
{{--                        <div class="project-bottom">--}}
{{--                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>--}}
{{--                        </div>--}}
{{--                        <div class="button-effect">--}}
{{--                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>--}}
{{--                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>--}}
{{--                            <a class="img-poppu btn" href="{{asset('guest/images/feature-properties/fp-4.jpg')}}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="homes">--}}
{{--                            <!-- homes img -->--}}
{{--                            <a href="properties-details.html" class="homes-img">--}}
{{--                                <div class="homes-tag button alt featured">Featured</div>--}}
{{--                                <div class="homes-tag button sale rent">For Rent</div>--}}
{{--                                <div class="homes-price">Family Home</div>--}}
{{--                                <img src="{{asset('guest/images/feature-properties/fp-4.jpg')}}" alt="home-1" class="img-responsive">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- homes content -->--}}
{{--                    <div class="homes-content">--}}
{{--                        <!-- homes address -->--}}
{{--                        <h3>Real House Luxury Villa</h3>--}}
{{--                        <p class="homes-address mb-3">--}}
{{--                            <a href="properties-details.html">--}}
{{--                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>--}}
{{--                            </a>--}}
{{--                        </p>--}}
{{--                        <!-- homes List -->--}}
{{--                        <ul class="homes-list clearfix">--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                <span>6 Bedrooms</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                <span>3 Bathrooms</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-object-group" aria-hidden="true"></i>--}}
{{--                                <span>720 sq ft</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fas fa-warehouse" aria-hidden="true"></i>--}}
{{--                                <span>2 Garages</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <!-- Price -->--}}
{{--                        <div class="price-properties">--}}
{{--                            <h3 class="title mt-3">--}}
{{--                                <a href="properties-details.html">$ 230,000</a>--}}
{{--                            </h3>--}}
{{--                            <div class="compare">--}}
{{--                                <a href="index.html#" title="Compare">--}}
{{--                                    <i class="fas fa-exchange-alt"></i>--}}
{{--                                </a>--}}
{{--                                <a href="index.html#" title="Share">--}}
{{--                                    <i class="fas fa-share-alt"></i>--}}
{{--                                </a>--}}
{{--                                <a href="index.html#" title="Favorites">--}}
{{--                                    <i class="fa fa-heart-o"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="footer">--}}
{{--                            <a href="agent-details.html">--}}
{{--                                <i class="fa fa-user"></i> Jhon Doe--}}
{{--                            </a>--}}
{{--                            <span>--}}
{{--                                <i class="fa fa-calendar"></i> 2 months ago--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="item col-lg-4 col-md-6 col-xs-12 people sale no-pb">--}}
{{--                <div class="project-single no-mb">--}}
{{--                    <div class="project-inner project-head">--}}
{{--                        <div class="project-bottom">--}}
{{--                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>--}}
{{--                        </div>--}}
{{--                        <div class="button-effect">--}}
{{--                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>--}}
{{--                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>--}}
{{--                            <a class="img-poppu btn" href="{{asset('guest/images/feature-properties/fp-5.jpg')}}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="homes">--}}
{{--                            <!-- homes img -->--}}
{{--                            <a href="properties-details.html" class="homes-img">--}}
{{--                                <div class="homes-tag button alt featured">Featured</div>--}}
{{--                                <div class="homes-tag button alt sale">For Sale</div>--}}
{{--                                <div class="homes-price">Family Home</div>--}}
{{--                                <img src="{{asset('guest/images/feature-properties/fp-5.jpg')}}" alt="home-1" class="img-responsive">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- homes content -->--}}
{{--                    <div class="homes-content">--}}
{{--                        <!-- homes address -->--}}
{{--                        <h3>Real House Luxury Villa</h3>--}}
{{--                        <p class="homes-address mb-3">--}}
{{--                            <a href="properties-details.html">--}}
{{--                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>--}}
{{--                            </a>--}}
{{--                        </p>--}}
{{--                        <!-- homes List -->--}}
{{--                        <ul class="homes-list clearfix">--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                <span>6 Bedrooms</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                <span>3 Bathrooms</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-object-group" aria-hidden="true"></i>--}}
{{--                                <span>720 sq ft</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fas fa-warehouse" aria-hidden="true"></i>--}}
{{--                                <span>2 Garages</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <!-- Price -->--}}
{{--                        <div class="price-properties">--}}
{{--                            <h3 class="title mt-3">--}}
{{--                                <a href="properties-details.html">$ 230,000</a>--}}
{{--                            </h3>--}}
{{--                            <div class="compare">--}}
{{--                                <a href="index.html#" title="Compare">--}}
{{--                                    <i class="fas fa-exchange-alt"></i>--}}
{{--                                </a>--}}
{{--                                <a href="index.html#" title="Share">--}}
{{--                                    <i class="fas fa-share-alt"></i>--}}
{{--                                </a>--}}
{{--                                <a href="index.html#" title="Favorites">--}}
{{--                                    <i class="fa fa-heart-o"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="footer">--}}
{{--                            <a href="agent-details.html">--}}
{{--                                <i class="fa fa-user"></i> Jhon Doe--}}
{{--                            </a>--}}
{{--                            <span>--}}
{{--                                <i class="fa fa-calendar"></i> 2 months ago--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="item col-lg-4 col-md-6 it2 col-xs-12 web rent no-pb">--}}
{{--                <div class="project-single no-mb last">--}}
{{--                    <div class="project-inner project-head">--}}
{{--                        <div class="project-bottom">--}}
{{--                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>--}}
{{--                        </div>--}}
{{--                        <div class="button-effect">--}}
{{--                            <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>--}}
{{--                            <a href="../../www.youtube.com/watch.htm" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>--}}
{{--                            <a class="img-poppu btn" href="{{asset('guest/images/feature-properties/fp-6.jpg')}}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="homes">--}}
{{--                            <!-- homes img -->--}}
{{--                            <a href="properties-details.html" class="homes-img">--}}
{{--                                <div class="homes-tag button alt featured">Featured</div>--}}
{{--                                <div class="homes-tag button sale rent">For Rent</div>--}}
{{--                                <div class="homes-price">Family Home</div>--}}
{{--                                <img src="{{asset('guest/images/feature-properties/fp-6.jpg')}}" alt="home-1" class="img-responsive">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- homes content -->--}}
{{--                    <div class="homes-content">--}}
{{--                        <!-- homes address -->--}}
{{--                        <h3>Real House Luxury Villa</h3>--}}
{{--                        <p class="homes-address mb-3">--}}
{{--                            <a href="properties-details.html">--}}
{{--                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>--}}
{{--                            </a>--}}
{{--                        </p>--}}
{{--                        <!-- homes List -->--}}
{{--                        <ul class="homes-list clearfix">--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                <span>6 Bedrooms</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                <span>3 Bathrooms</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-object-group" aria-hidden="true"></i>--}}
{{--                                <span>720 sq ft</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fas fa-warehouse" aria-hidden="true"></i>--}}
{{--                                <span>2 Garages</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <!-- Price -->--}}
{{--                        <div class="price-properties">--}}
{{--                            <h3 class="title mt-3">--}}
{{--                                <a href="properties-details.html">$ 230,000</a>--}}
{{--                            </h3>--}}
{{--                            <div class="compare">--}}
{{--                                <a href="index.html#" title="Compare">--}}
{{--                                    <i class="fas fa-exchange-alt"></i>--}}
{{--                                </a>--}}
{{--                                <a href="index.html#" title="Share">--}}
{{--                                    <i class="fas fa-share-alt"></i>--}}
{{--                                </a>--}}
{{--                                <a href="index.html#" title="Favorites">--}}
{{--                                    <i class="fa fa-heart-o"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="footer">--}}
{{--                            <a href="agent-details.html">--}}
{{--                                <i class="fa fa-user"></i> Jhon Doe--}}
{{--                            </a>--}}
{{--                            <span>--}}
{{--                                <i class="fa fa-calendar"></i> 2 months ago--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<!-- END SECTION FEATURED PROPERTIES -->
