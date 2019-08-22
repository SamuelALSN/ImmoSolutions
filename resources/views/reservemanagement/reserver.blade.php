@extends('guest.layouts.app')
@section('content')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1 id="essai">@lang("ReservationComplete")</h1>
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
                                            <label for="">@lang("Date Visite") : {{$trans->pivot->visiteDate}}</label>
                                            <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" readonly/>
                                                <span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                            <label>Date Arrivé: {{$trans->pivot->beginDate}} </label>
                                            <div id="datepicker1" class="input-group date"
                                                 data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" readonly/>
                                                <span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                            <label>Date Départ:  {{$trans->pivot->endDate}}</label>
                                            <div id="datepicker2" class="input-group date"
                                                 data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" readonly/>
                                                <span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-calendar"></i></span>
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

<script>

</script>

<script>
    // fetch API USING
    window.addEventListener('DOMContentLoaded', (e) => {
        var date =" <?php echo $property->id ?>";
            console.log(date);
        $(function () {
            var date = new Date();
            date.setDate(date.getDate());
            $("#datepicker").datepicker({
                autoclose: true,
                todayHighlight: true,
                startDate:date
            }).datepicker('update', new Date());

            $("#datepicker1").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());

            $("#datepicker2").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());
        });

        // INSERT DATA IN DATABASE HERE
        $('#enregistrer').on('click', function () {
            //console.log($("#datepicker1").find("input").val());
            event.preventDefault();

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
                    visiteDate: $("#datepicker").find("input").val(),
                    beginDate: $("#datepicker1").find("input").val(),
                    endDate: $("#datepicker2").find("input").val(),
                })
            })
                .then((data) => {
                    if (data.ok) {
                        data.json().then(validation => {
                            if ($.isEmptyObject(validation.error)) {
                                document.getElementById("propertyForm").reset();

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

            //$(".print-error-msg").find("ul").html('');
            // $(".print-error-msg").css('display','block');

            $.each(msg, function (key, value) {
                alertify.error('Renseignez les champs :' + value);
                // $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

            });

        }

    });


</script>

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
