@extends('layouts.app')
@section('style')
    <link href="{{asset('datatables/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{asset('datatables/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    @include('common.header')
    <div class="app-body">
        <div class="sidebar">
            @include('common.sidebar')
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main">
            <!-- Breadcrumb-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">@lang("Accueil")</li>
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">@lang("Tableau de Bord")</li>
                <!-- Breadcrumb Menu-->
                <li class="breadcrumb-menu d-md-down-none">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <a class="btn" href="#">
                            <i class="icon-speech"></i>
                        </a>
                        <a class="btn" href="./">
                            <i class="icon-graph"></i>  @lang("Tableau de Bord")</a>
                        <a class="btn" href="#">
                            <i class="icon-settings"></i>  @lang("Parameters")</a>
                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <!--table-->
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> @lang('Biens Immobiliers Attribués')
                            <div class="card-header-actions">
                                <a class="card-header-action" href="" target="_blank">
                                    <small class="text-muted">@lang('Lists')</small>
                                </a>
                                <button class="btn btn-primary mb-1" type="button" data-toggle="modal" id="create-user"
                                        data-target="#primaryModal">@lang('Ajouter Biens')
                                </button>
                            </div>
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
                                                    aria-label="adresse: activate to sort column descending"
                                                    style="width: 235px;">@lang("Coordonnées")
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="standing: activate to sort column descending"
                                                    style="width: 235px;">@lang("TypeBien")
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="name: activate to sort column descending"
                                                    style="width: 235px;">@lang("Statut Bien")
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Date registered: activate to sort column ascending"
                                                    style="width: 201px;"> @lang("DateAjout")
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Date registered: activate to sort column ascending"
                                                    style="width: 201px;"> @lang("Vendeur")
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Date registered: activate to sort column ascending"
                                                    style="width: 201px;"> @lang("Agents")
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Date registered: activate to sort column ascending"
                                                    style="width: 201px;"> @lang("Validé")
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
                                                @foreach($property->assignment as $assign)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><a
                                                                href="{{url('/property-details/'.$property->id)}}">{{$property->id}}</a>
                                                        </td>
                                                        <td class="sorting_1">{{$property->name}}</td>
                                                        <td>{{$property->adresse}}</td>
                                                        <td>{{$property->longitudeposition}}
                                                            , {{$property->latitudeposition}}</td>
                                                        <td><span
                                                                class="badge badge-dark"> {{$property->propertytype['name']}}</span>
                                                        </td>
                                                        <td>
                                                            @foreach($property->typetransactions as $typetrans)
                                                                @if($typetrans->name =='Location')
                                                                    @php $badgeClass ='primary' @endphp
                                                                @elseif($typetrans->name =='Vente')
                                                                    @php $badgeClass='warning' @endphp
                                                                @elseif($typetrans->name =='Bail')
                                                                    @php $badgeClass='success' @endphp
                                                                @endif
                                                                <span
                                                                    class="badge badge-{{$badgeClass}}">{{$typetrans->name}}</span>

                                                            @endforeach
                                                        </td>
                                                        <td>{{$property->created_at}}</td>
                                                        <td> {{$property->user['email']}} </td>
                                                        <td>{{$assign->email}}</td>
                                                        <td>
                                                            @if($assign->pivot->status ==1)
                                                                @php $badgeClass='success' @endphp
                                                                <?php $status_p = "Vérifié " ?>
                                                            @elseif($assign->pivot->status==0)
                                                                @php $badgeClass='warning' @endphp
                                                                <?php $status_p = "Pas Vérifié " ?>
                                                            @elseif($assign->pivot->status==2)
                                                                @php $badgeClass='danger' @endphp
                                                                <?php $status_p = "Vérifié Avec Echec " ?>
                                                            @endif
                                                            <span class="badge badge-{{$badgeClass}}"> {{ $status_p }}</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-success" data-toggle="modal"
                                                               data-target="#largeModal"
                                                               id="show-property"
                                                               data-info="{{$property->id}}">
                                                                <i class="fa fa-search-plus"></i>
                                                            </a>
                                                            <a class="btn btn-info" data-toggle="modal"
                                                               data-target="#primaryModal"
                                                               id="edit-property"
                                                               data-info="{{$property->id}}">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a class="btn btn-danger" data-toggle="modal"
                                                               data-target="#dangerModal"
                                                               id="delete-property" data-id=""
                                                               data-info="{{$property->id}} ">
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
                    </div>
                </div>
                <!--table end -->


                <!-- /.modal add -->
                <!-- /.modal-end-->

            </div>
        </main>
        @include('common.aside')
    </div>
@endsection
@section('script')
    <script src="{{asset('datatables/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('datatables/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('datatables/js/dataTables.js')}}"></script>
    <script src="{{asset('important/scripts/datatableproperty-manip.js')}}"></script>
@endsection
