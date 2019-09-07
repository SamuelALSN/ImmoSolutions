@extends('guest.layouts.app')
@section('content')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>@lang("Mes Réservations")</h1>
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
        </div>
    </section>
    <section class="pricing-table">
        <div class="container">
            <div class="section-title">
                <h3>@lang("Détails")</h3>
                <h2>@lang("Réservations")</h2>

            </div>
            <div class="row">
                @if(count($properties)>0)
            @foreach($properties as $property)
                <!-- plan start -->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        @foreach($property->typetransactions as $trans)
                            @foreach($property->reservation as $reserv)
{{--                                @if($reserv->pivot->status ==0)--}}

{{--                                    @php $class ='featured no-mgb yes-mgb' @endphp--}}
{{--                                @elseif($reserv->pivot->status==1)--}}
{{--                                    @php $class ='' @endphp--}}
{{--                                @endif--}}
{{--                                    {{$reserv->pivot->status}}--}}
                            <div class="plan text-center">
                                <span class="plan-name">{{$property->name}} </span>
                                <p class="plan-price"><sup
                                        class="currency"></sup><strong>{{$trans->pivot->ammount}}</strong><sub>CFA</sub>
                                </p>
                                <ul class="list-unstyled">
                                    <li>@lang("Date Réservation") ||
                                        <small>{{$trans->pivot->created_at}}</small>
                                    </li>
                                    <li>@lang("Date Arrivé") ||</li>
                                    <li>@lang("Date Départ") ||</li>
                                    <li>@lang("Status") ||</li>
                                    <li>@lang("Agents") ||</li>
                                </ul>
                                <a class="btn btn-primary" href="{{url('/payment/'.$reserv->pivot->id.'/'.$trans->pivot->ammount)}}">@lang("Détails")</a>
                            </div>
                            @endforeach
                        @endforeach
                    </div>
                @endforeach

                    @else
                    <h3> Aucne réservation payé </h3>
                    @endif
            </div>
            <nav aria-label="..." class="pt-3">
                <ul class="pagination">
                    {{$properties->links()}}
                </ul>
            </nav>
        </div>

    </section>
@endsection
