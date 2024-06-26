<!-- START SECTION AGENTS -->
<section class="team">
    <div class="container">
        <div class="section-title col-md-5">
            <h3>@lang("Rencontrer nos")</h3>
            <h2>@lang("Agents")</h2>

        </div>
        <div class="row team-all">
            @foreach($agents as $agent)
            <div class="col-lg-3 col-md-6 team-pro hover-effect">
                <div class="team-wrap">
                    <div class="team-img">
                        <img src="{{asset('guest/images/team/t-1.png')}}" alt="" />
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3>{{$agent->name}}  {{$agent->last_name}} </h3>
                            <p>{{$agent->email}}</p>
                            <div class="team-socials">
                                <ul>
                                    <li>
                                        <a href="" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <span><a href="">@lang("Contacter")</a></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
{{--            <div class="col-lg-3 col-md-6 team-pro hover-effect">--}}
{{--                <div class="team-wrap">--}}
{{--                    <div class="team-img">--}}
{{--                        <img src="{{asset('guest/images/team/t-2.png')}}" alt="" />--}}
{{--                    </div>--}}
{{--                    <div class="team-content">--}}
{{--                        <div class="team-info">--}}
{{--                            <h3>Arling Tracy</h3>--}}
{{--                            <p>Real Estate Agent</p>--}}
{{--                            <div class="team-socials">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <a href="  #" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
{{--                                        <a href="  #" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
{{--                                        <a href="  #" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <span><a href="">View Profile</a></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 team-pro pb-none hover-effect">--}}
{{--                <div class="team-wrap">--}}
{{--                    <div class="team-img">--}}
{{--                        <img src="{{asset('guest/images/team/t-3.png')}}" alt="" />--}}
{{--                    </div>--}}
{{--                    <div class="team-content">--}}
{{--                        <div class="team-info">--}}
{{--                            <h3>Mark Web</h3>--}}
{{--                            <p>Real Estate Agent</p>--}}
{{--                            <div class="team-socials">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <a href="  #" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
{{--                                        <a href="  #" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
{{--                                        <a href="  #" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <span><a href="">View Profile</a></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 team-pro hover-effect">--}}
{{--                <div class="team-wrap">--}}
{{--                    <div class="team-img">--}}
{{--                        <img src="{{asset('guest/images/team/t-5.png')}}" alt="" />--}}
{{--                    </div>--}}
{{--                    <div class="team-content">--}}
{{--                        <div class="team-info">--}}
{{--                            <h3>Katy Grace</h3>--}}
{{--                            <p>Real Estate Agent</p>--}}
{{--                            <div class="team-socials">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <a href="  #" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
{{--                                        <a href="  #" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
{{--                                        <a href="  #" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <span><a href="">View Profile</a></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<!-- END SECTION AGENTS -->
