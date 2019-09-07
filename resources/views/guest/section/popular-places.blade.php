<!-- START SECTION POPULAR PLACES -->
<section class="popular-places">
    <div class="container">
        <div class="section-title">
            <h3>@lang("Nos")</h3>
            <h2>@lang("Villes")</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Image Box -->
                <a href="https://code-theme.com/html/findhouses/properties-right-sidebar.html" class="img-box hover-effect">
                    <img src="{{asset('guest/images/popular-places/1.jpeg')}}" class="img-responsive" alt="">
                    <!-- Badge -->
                    <div class="listing-badges">
                        <span class="featured">Villes</span>
                    </div>
                    <div class="img-box-content visible">
                        <h4>{{$villes[0]->locality}} </h4>
                        <span> @lang("Biens")</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-8 col-md-6">
                <!-- Image Box -->
                <a href="https://code-theme.com/html/findhouses/properties-right-sidebar.html" class="img-box hover-effect">
                    <img src="{{asset('guest/images/popular-places/22.jpg')}}" class="img-responsive" alt="">
                    <div class="img-box-content visible">
                        <h4>{{$villes[1]->locality}}</h4>
                        <span> @lang("Biens")</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-8 col-md-6">
                <!-- Image Box -->
                <a href="https://code-theme.com/html/findhouses/properties-right-sidebar.html" class="img-box hover-effect no-mb">
                    <img src="{{asset('guest/images/popular-places/3.jpg')}}" class="img-responsive" alt="">
                    <div class="img-box-content visible">
                        <h4> {{$villes[2]->locality}} </h4>
                        <span> @lang("Biens")</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Image Box -->
                <a href="https://code-theme.com/html/findhouses/properties-right-sidebar.html" class="img-box hover-effect no-mb x3">
                    <img src="{{asset('guest/images/popular-places/11.jpg')}}" class="img-responsive" alt="">
                    <!-- Badge -->
                    <div class="listing-badges">
                        <span class="featured">Villes</span>
                    </div>
                    <div class="img-box-content visible">
                        <h4>{{$villes[3]->locality}}</h4>
                        <span> @lang("Biens")</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION POPULAR PLACES -->
