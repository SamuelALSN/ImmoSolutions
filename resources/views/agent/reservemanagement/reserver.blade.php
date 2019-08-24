@extends('guest.layouts.app')
@section('content')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1 id="essai">@lang("Reservation")</h1>
                <h2></h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION SUBMIT PROPERTY -->
    <section class="royal-add-property-area section_100">
        <div class="container">
            <form id="ReserverForm" action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-add-property">
                            <h3>@lang("Details de la reservation")</h3>
                            @foreach($property->typetransactions as $trans)
                                <div class="property-form-group">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input id="property_id" type="text"
                                                   value="{{ app('request')->input('property_id')}}" hidden>
                                        </div>

                                        <div class="col-md-12">
                                            <label> Commentaire </label>
                                            <textarea id="comment" placeholder="optionnel" class="form-control">

                                    </textarea>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for=""></label>
                                            <div class="property-form-group">
                                                <div class="row">
                                                    <p class="col-lg-4 col-md-12">
                                                        <label for="date">@lang("Date Arrivé")
                                                            <span> {{$trans->pivot->beginDate}} </span></label>
                                                        <input class="form-control" type="date" name="datedeb"
                                                               id="datedeb">

                                                    </p>
                                                    <div class="col-lg-4 col-md-12">
                                                        <p class="">
                                                            <label for="surface">@lang("Date Départ")
                                                                <span> {{$trans->pivot->endDate}}</span> </label>
                                                            <input class="form-control" type="date" name="datefin"
                                                                   id="datefin" value="">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12">
                                                        <p class="">
                                                            <label for="surface">@lang("Date de Visite")
                                                                <span> {{$trans->pivot->visiteDate}}</span> </label>
                                                            <input class="form-control" type="date" name="dateviiste"
                                                                   id="datevisite">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="add-property-button">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="prperty-submit-button">
                                        <button class="btn btn-success" id="enregistrer">@lang("Reserver")</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </section>


@endsection
@section('my_scripts')
    <script src="{{asset('js/alertify/alertify.min.js')}}"></script>
    <script>
        // fetch API USING
        window.addEventListener('DOMContentLoaded', (e) => {

            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;     // getMonth() is zero-based
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();


            // var maxDate = year + '-' + month + '-' + day;
            var begin = "<?php echo $trans->pivot->beginDate ?>";
            var end = "<?php echo $trans->pivot->endDate ?>";
            var visite = "<?php echo $trans->pivot->visiteDate ?>";

            $('#datedeb').attr('min', begin);
            $('#datefin').attr('max', end);
            $('#datevisite').attr('min', visite);

            // controle date

            $('#datefin').on('change', function (e) {
                var datefin = $('#datefin').val();
                var datedeb = $('#datedeb').val();
                if (datefin < datedeb) {
                    alertify.alert("Date Invalide", "la date de fin doit etre superieure à la date debut ");
                    $('#datefin').val('');
                    $('#datefin').focus();
                }

            });

            $('#datevisite').on('change', function (e) {
                var dateviste = $('#datevisite').val();
                var datedebut = $('#datedeb').val();

                var visite = new Date(dateviste);
                var datedeb = new Date(datedebut);

                if (visite > datedeb) {
                    alertify.alert("Date Invalide", " la date visite doit  etre inferieure à la date de debut ");
                    $('#datevisite').val('');
                    $('#datevisite').focus();
                }

            });

            // INSERT DATA IN DATABASE HERE
            $('#enregistrer').on('click', function () {
                event.preventDefault();
                console.log(visite);
                var form = $('#ReserverForm');
                var token = $("input[name='_token']").val();
                fetch('{{url('/reserver')}}', {
                    headers: {
                        "Content-type": "application/json;charset=utf-8",
                        "Accept": "application/json,text-plain",
                        "X-Requested-Width": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                    },
                    method: 'POST',
                    credentials: "same-origin",
                    body: JSON.stringify({
                        property_id: $('#property_id').val(),
                        comment: $('#comment').val(),
                        visiteDate: $("#datevisite").val(),
                        beginDate: $("#datedeb").val(),
                        endDate: $("#datefin").val(),
                    })
                })
                    .then((data) => {
                        if (data.ok) {
                            data.json().then(validation => {
                                if ($.isEmptyObject(validation.error)) {
                                    document.getElementById("ReserverForm").reset();
                                    alertify.success(' ' + validation.success);
                                    console.log(validation.success);
                                } else {
                                    printErrorMsg(validation.error);
                                    console.log(validation);
                                }
                            })
                        } else {
                            console.error('Reponse serveur : ' + data.status);
                        }
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            });

            function printErrorMsg(msg) {
                $.each(msg, function (key, value) {
                    alertify.error('Renseignez les champs :' + value);
                });

            }

        });


    </script>
@endsection


{{--<script>--}}
{{--    // traitement du formulaire d'enregistrement de la transaction--}}
{{--    window.addEventListener('DOMContentLoaded', (e) => {--}}

{{--        fetch('{{url('/typetransaction')}}')--}}
{{--            .then(response => {--}}
{{--                if (response.ok) {--}}
{{--                    response.json().then(typetransaction => {--}}

{{--                        var type_trans = '<option disabled> @lang("Choisir ")</option>';--}}
{{--                        for (let i = 0; i < typetransaction.length; i++) {--}}

{{--                            type_trans += "<option value =" + typetransaction[i].id + ">" + typetransaction[i].name + "</option>";--}}
{{--                            $('#typetransaction').html(type_trans);--}}


{{--                        }--}}
{{--                        $('#amount').fadeToggle(1000);--}}
{{--                        $('#percentage').fadeToggle(1000);--}}
{{--                        $('#interval').fadeToggle(1000);--}}
{{--                    })--}}
{{--                } else {--}}
{{--                    console.error(' Reponse serveur : ' + response.status);--}}
{{--                }--}}

{{--            });--}}

{{--        // verification date--}}
{{--        $('#datedeb').on('change', function (e) {--}}
{{--            var datedeb = $('#datedeb').val();--}}
{{--            var currentDate = new Date();--}}
{{--            var deb = new Date(datedeb);--}}

{{--            if (deb < currentDate) {--}}
{{--                $('#datedeb').focus();--}}
{{--                alertify.alert("Date Invalide ","la date de debut doit etre superieure à la date du jour ");--}}
{{--            }--}}
{{--        });--}}
{{--        // verification datefin--}}
{{--        $('#datefin').on('change', function (e) {--}}
{{--            var datefin = $('#datefin').val();--}}
{{--            var datedeb = $('#datedeb').val();--}}
{{--            var fin = new Date(datefin);--}}
{{--            var debt = new Date(datedeb);--}}
{{--            if(fin<debt){--}}
{{--                alertify.alert("Date Invalide","la date de fin doit etre superieure à la date debut ");--}}
{{--            }--}}

{{--        });--}}

{{--        $('#datevisite').on('change',function (e) {--}}
{{--            var getCurrentDate = new Date();--}}
{{--            var dateviste = $('#datevisite').val();--}}
{{--            var datedebut = $('#datedeb').val();--}}

{{--            var visite = new  Date(dateviste);--}}
{{--            var datedeb = new Date(datedebut);--}}

{{--            if(visite<getCurrentDate || visite>datedeb){--}}
{{--                alertify.alert("Date Invalide"," la date de visite doit etre superieure à la date du jour ou   etre inferieure à la date de debut ")--}}
{{--            }--}}

{{--        });--}}


{{--        // FETCH POST--}}
{{--        $('#enregistrer').on('click', function () {--}}
{{--            event.preventDefault();--}}

{{--            var form = $('#TransactionForm');--}}
{{--            var token = $("input[name='_token']").val();--}}
{{--            fetch('{{url('/transaction')}}', {--}}
{{--                headers: {--}}
{{--                    "Content-type": "application/json;charset=utf-8",--}}
{{--                    "Accept": "application/json,text-plain",--}}
{{--                    "X-Requested-Width": "XMLHttpRequest",--}}
{{--                    "X-CSRF-TOKEN": token--}}
{{--                },--}}
{{--                method: 'POST',--}}
{{--                credentials: "same-origin",--}}
{{--                body: JSON.stringify({--}}
{{--                    typetransaction: $('#typetransaction').val(),--}}
{{--                    ammount: $('#amount').val(),--}}
{{--                    beginDate: $('#datedeb').val(),--}}
{{--                    endDate: $('#datefin').val(),--}}
{{--                    visiteDate: $('#datevisite').val(),--}}
{{--                    property: $('#Insertproperty').val(),--}}
{{--                })--}}
{{--            })--}}
{{--                .then((data) => {--}}
{{--                    if (data.ok) {--}}
{{--                        data.json().then(validation => {--}}
{{--                            if ($.isEmptyObject(validation.error)) {--}}
{{--                                document.getElementById("TransactionForm").reset();--}}
{{--                                alertify.success(' ' + validation.success);--}}
{{--                                console.log(validation.success);--}}
{{--                                window.location.href ="{{url('/properties-all')}}";--}}
{{--                            } else {--}}
{{--                                printErrorMsg(validation.error);--}}
{{--                                console.log(validation);--}}
{{--                            }--}}
{{--                        })--}}
{{--                    } else {--}}
{{--                        console.error('Reponse serveur : ' + data.status);--}}
{{--                    }--}}
{{--                })--}}
{{--                .catch(function (error) {--}}
{{--                    console.log(error);--}}
{{--                });--}}
{{--        });--}}


{{--        function printErrorMsg(msg) {--}}
{{--            $.each(msg, function (key, value) {--}}
{{--                alertify.error('Renseignez les champs :' + value);--}}

{{--            });--}}

{{--        }--}}

{{--    });--}}

{{--</script>--}}
