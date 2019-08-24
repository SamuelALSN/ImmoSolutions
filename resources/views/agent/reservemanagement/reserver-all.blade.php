@extends('guest.layouts.app')
@section('content')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>@lang("Mes Réservations")</h1>
            </div>
        </div>
    </section>
    <section class="pricing-table">
        <div class="container">
            <div class="section-title">
                <h3>@lang("Détails")</h3>
                <h2>@lang("Réservations")</h2>

            </div>
            <div class="row">
            @foreach($properties as $property)
                <!-- plan start -->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        @foreach($property->typetransactions as $trans)
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
                                <a class="btn btn-primary" href="">@lang("Détails")</a>
                            </div>
                        @endforeach
                    </div>
            @endforeach
            </div>
            <nav aria-label="..." class="pt-3">
                <ul class="pagination">
                    {{$properties->links()}}
                </ul>
            </nav>
        </div>

    </section>
@endsection
