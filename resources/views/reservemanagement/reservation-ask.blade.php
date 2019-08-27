@extends('guest.layouts.app')
@section('style')
    <link href="{{asset('datatables/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{asset('datatables/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1 id="essai">@lang("Demandes de Réservations")</h1>
                <h2></h2>
            </div>
        </div>
    </section>
    <section class="pricing-table">
        <div class="container">
            <div class="section-title">
                <h3>@lang("Demandes ")</h3>
                <h2>@lang("à Confirmer")</h2>

            </div>

            <div class="card-body">
                <div id="DataTables_Table_0_wrapper"
                     class="dataTables_wrapper dt-bootstrap4 no-footer table-responsive"
                     style="font-size: 12px;">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-bordered" id="DataTables_Table_0"
                                   role="grid"
                                   aria-describedby="DataTables_Table_0_info"
                                   style="border-collapse: collapse !important">
                                <thead>
                                <tr role="row">
                                    <th> @lang('ID')</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="name: activate to sort column descending"
                                        style="width: 235px;">@lang("Bien")
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="adresse: activate to sort column descending"
                                        style="width: 235px;">@lang("Adresse")
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="standing: activate to sort column descending"
                                        style="width: 235px;">@lang("TypeBien")
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="name: activate to sort column descending"
                                        style="width: 235px;">@lang("Status Bien")
                                    </th>
                                    {{--                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"--}}
                                    {{--                                        rowspan="1" colspan="1"--}}
                                    {{--                                        aria-label="Posteur : activate to sort column ascending"--}}
                                    {{--                                        style="width: 201px;"> @lang("Posteur")--}}
                                    {{--                                    </th>--}}
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1"
                                        aria-label="Date registered: activate to sort column ascending"
                                        style="width: 201px;"> @lang("Agent Supperviseur")
                                    </th>
                                    {{--                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"--}}
                                    {{--                                        rowspan="1" colspan="1"--}}
                                    {{--                                        aria-label="Date registered: activate to sort column ascending"--}}
                                    {{--                                        style="width: 201px;"> @lang("Postulant")--}}
                                    {{--                                    </th>--}}
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1"
                                        aria-label="Date registered: activate to sort column ascending"
                                        style="width: 201px;"> @lang("Status")
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1"
                                        aria-label="Date Visite: activate to sort column ascending"
                                        style="width: 201px;"> @lang("Date Visite ")
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1"
                                        aria-label="Actions: activate to sort column ascending"
                                        style="width: 209px;">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="properties_table">
                                @foreach($properties as $property)
                                    @foreach($property->reservation as $reserv)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><a
                                                    href="{{url(''.$property->id)}}">{{$property->id}}</a>
                                            </td>
                                            <td class="sorting_1">{{$property->name}}</td>
                                            <td>{{$property->adresse}}</td>
                                            <td>
                                                        <span
                                                            class="badge badge-default"> {{$property->propertytype['name']}}</span>
                                            </td>
                                            <td>
                                                @foreach($property->typetransactions as $typetrans)
                                                    @if($typetrans->name =='LOCATION')
                                                        @php $badgeClass ='primary' @endphp
                                                    @elseif($typetrans->name =='VENTE')
                                                        @php $badgeClass='warning' @endphp
                                                    @elseif($typetrans->name =='BAILLE')
                                                        @php $badgeClass='success' @endphp
                                                    @endif
                                                    <span
                                                        class="badge badge-{{$badgeClass}}">{{$typetrans->name}}</span>

                                                @endforeach
                                            </td>
                                            {{--                                        <td> {{$property->user['email']}} </td>--}}
                                            <td>@foreach($property->assignment as $agents)
                                                    {{$agents->email}}
                                                @endforeach
                                            </td>
                                            {{--                                        <td>--}}
                                            {{--                                            @foreach($property->reservation as $acheteur)--}}
                                            {{--                                                {{$acheteur->email}}--}}
                                            {{--                                            @endforeach--}}
                                            {{--                                        </td>--}}

                                            <td>
                                                @foreach($property->reservation as $reservation)
                                                    @if($reservation->pivot->status==1)
                                                        @php $badgeClass='success' @endphp
                                                        <?php $status_p = "reservé" ?>
                                                    @elseif($reservation->pivot->status==0)
                                                        @php $badgeClass='warning' @endphp
                                                        <?php $status_p = "Pas reservé" ?>
                                                    @endif
                                                    <span
                                                        class="badge badge-{{$badgeClass}}">{{$status_p}}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($property->reservation as $visite)
                                                    <span class="badge badge-info">
                                                  {{$visite->pivot->visite_at}}
                                              </span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a class="btn btn-success" data-toggle="modal"
                                                   data-target="#largeModal"
                                                   id="show-reservation"
                                                   data-info="{{$reserv->pivot->id}}">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                                {{--                                            <a class="btn btn-info" data-toggle="modal"--}}
                                                {{--                                               data-target="#primaryModal"--}}
                                                {{--                                               id="edit-reservation"--}}
                                                {{--                                               data-info="{{$property->id}}">--}}
                                                {{--                                                <i class="fa fa-edit"></i>--}}
                                                {{--                                            </a>--}}
                                                <a class="btn btn-danger" data-toggle="modal"
                                                   data-target="#dangerModal"
                                                   id="delete-reservation"
                                                   data-info="{{$property->id}}">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="..." class="pt-3">
                <ul class="pagination">
                    {{--                    {{$properties->links()}}--}}
                </ul>
            </nav>
        </div>
    </section>
@endsection
@section('my_scripts')
    <script src="{{asset('datatables/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('datatables/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('datatables/js/dataTables.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var myTable = $('#DataTables_Table_0').DataTable();

            /*
            showing update modal
             */

            /*
            showing show modal for defining visite
             */

            $(document).on('click', '#show-reservation', function () {
                console.log($(this).data('info'));
                var reserv_confirm = $(this).data('info');
                alertify.confirm('Confirmation de la date de visite', 'Confirmer la date de visite ?',
                    function () {

                        fetch('/confirm-visite/' + reserv_confirm)
                            .then(response => {
                                if (response.ok) {
                                    response.json().then(user_prop => {
                                        console.log(user_prop);
                                    })
                                } else {
                                    console.error(' Reponse serveur : ' + response.status);
                                }

                            });

                        alertify.success('Ok')

                    }
                    , function () {

                        //$('input[type=checkbox]').prop('checked', false);
                        $('#validate').prop("checked", false);
                        alertify.error('Annuler')
                    });
            });


            /*
            ===============================================VALIDATE A PROPERTY BY USER
             */

            $(document).on('change', '#validate', function () {
                var prop = $(this).data('info');
                // alert(prop);
                alertify.confirm('Validation du bien', 'Voulez vous Vraiment valider ce bien  ?',
                    function () {

                        fetch('/validate-property/' + prop)
                            .then(response => {
                                if (response.ok) {
                                    response.json().then(user_prop => {
                                        console.log(user_prop);
                                    })
                                } else {
                                    console.error(' Reponse serveur : ' + response.status);
                                }

                            });

                        alertify.success('Ok')

                    }
                    , function () {

                        //$('input[type=checkbox]').prop('checked', false);
                        $('#validate').prop("checked", false);
                        alertify.error('Annuler')
                    });


            });

        });
    </script>
@endsection
