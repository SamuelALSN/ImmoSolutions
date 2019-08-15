@extends('guest.layouts.app')
@section('my_css')
    <link rel="stylesheet" href="{{asset('guest/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/lightcase.css')}}">
@endsection
@section('content')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>@lang("Mes Biens ")</h1>
                <h2>Liste</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION PROPERTIES LISTING -->
    <section class="properties-list full featured portfolio blog">
        <div class="container">
            <!-- Block heading Start-->
            <div class="block-heading">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-2">
                        <h4>
                            <span class="heading-icon">
                                <i class="fa fa-th-list"></i>
                                </span>
                            <span class="hidden-sm-down">@lang(" Liste des Biens ")</span>
                        </h4>
                    </div>
                    <div class="col-lg-6 col-md-7 col-10 cod-pad">
                        <div class="sorting-options">
                            <select class="sorting">
                                <option></option>
                            </select>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row featured portfolio-items">
                @foreach($properties as $property)
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">@lang("Voir Bien ")</a><span class="category">{{$property->propertytype['name']}}</span></h4>
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
                                    <div class="homes-price">Family Home  </div>
                                    <img src="{{asset('storage/images/'.$property->images[0]->file)}}" alt="home-1" class="img-responsive"
                                    height="750" width="1000">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>{{$property->name}}</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>{{$property->adresse}}</span>
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
                                    <a href="properties-details.html">{{$typetrans->pivot->ammount}} CFA</a>
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
                            @endforeach
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i>
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach

            </div>

            <nav aria-label="..." class="pt-3">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="properties-full-list.html#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="properties-full-list.html#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="properties-full-list.html#">2</a></li>
                    <li class="page-item"><a class="page-link" href="properties-full-list.html#">3</a></li>
                    <li class="page-item"><a class="page-link" href="properties-full-list.html#">3</a></li>
                    <li class="page-item"><a class="page-link" href="properties-full-list.html#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="properties-full-list.html#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
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
