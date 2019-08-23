@extends('layouts.app')
@section('style')
    <link href="{{asset('datatables/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{asset('datatables/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!--dropzone file-->
    {{--    <link rel="stylesheet" href="{{asset('guest/css/dropzone.css')}}">--}}
    {{--    <link rel="stylesheet" href="{{asset('guest/css/dropzonecustom.css')}}">--}}
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
                    <a href="#">@lang("Admin")</a>
                </li>
                <li class="breadcrumb-item active">@lang("Tableau de Bord")</li>
                <!-- Breadcrumb Menu-->
                <li class="breadcrumb-menu d-md-down-none">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <a class="btn" href="#">
                            <i class="icon-speech"></i>
                        </a>
                        <a class="btn" href="./">
                            <i class="icon-graph"></i>@lang("Tableau de Bord")</a>
                        <a class="btn" href="#">
                            <i class="icon-settings"></i>@lang("Paramètres")</a>
                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row">
                        <div id="show-col" class="col-sm-12">
                            <div class="card" style="">
                                <div class="card-header"> @lang("Bien №") : {{$property->id}}</div>
                                <div class="card-body">
                                    <table class="table">

                                        <thead>
                                        <tr>
                                            <td><span class="h4"> @lang("Nom")</span></td>
                                            <td>{{$property->name}}</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <span class="h4"> @lang("Description")</span>

                                            </td>
                                            <td>
                                                <p>
                                                    {{$property->description}}
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="h4"> @lang("Adresse")</span>


                                            </td>
                                            <td>
                                                <p class="">{{$property->adresse}}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="h4"> @lang("Surface")</span>


                                            </td>
                                            <td>
                                                <p>
                                                    {{$property->area}}
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                        <span class="h4">
                                        @lang("Coordonéés")</span>

                                            </td>
                                            <td>
                                        <span
                                            class="">{{$property->longitudeposition}} || {{$property->latitudeposition}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    <span class="h4"> @lang("Type de Bien ")</span>


                                                </p>
                                            </td>
                                            <td>
                                                {{$property->propertytype['name']}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    <span class="h4">@lang("Standing")</span>


                                                </p>
                                            </td>
                                            <td>
                                                {{$property->standing['standing_name']}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    <span class="h4">@lang("Chambres")</span>


                                                </p>
                                            </td>
                                            <td>
                                                {{$property->rooms}}@lang("Chambre")
                                                || {{$property->bathRooms}} @lang("Douche")
                                                || {{$property->garages}} @lang("Garages")
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    <span class="h4">  @lang("Proprietaire")</span>


                                                </p>
                                            </td>
                                            <td>
                                                {{$property->user['name']}} {{$property->user['last_name']}}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>
                                                    <span class="h4"> @lang("Type de Transactions")</span>


                                                </p>
                                            </td>
                                            @foreach ($property->typetransactions as $typetrans)
                                                <td>
                                                    {{$typetrans->name}}
                                                </td>
                                            @endforeach

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="h4"> @lang("Prix ")</span>


                                            </td>
                                            @foreach($property->typetransactions as $typetrans)
                                                <td>
                                                    {{$typetrans->pivot->ammount}}
                                                </td>
                                            @endforeach
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="h4">@lang("Durée du baille")</span>


                                            </td>
                                            @foreach ($property->typetransactions as $typetrans)
                                                <td>
                                                    Du {{$typetrans->pivot->beginDate}}
                                                    au {{$typetrans->pivot->endDate}}
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="h4"> @lang("Date Ajout")</span>


                                            </td>
                                            @foreach ($property->typetransactions as $typetrans)
                                                <td>
                                                    {{$typetrans->pivot->created_at}}
                                                </td>
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Carousel
                                    <small>Images</small>
                                </div>
                                <div class="card-body">
                                    <div class="carousel slide" id="carouselExampleCaptions" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li class="active" data-target="#carouselExampleCaptions"
                                                data-slide-to="0"></li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" width="800" height="400"
                                                     data-src="holder.js/1000x750?auto=yes&amp;bg=777&amp;fg=555&amp;text=Veuillez defiler"
                                                     alt="Veuillez defilez"
                                                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9274%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9274%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9296875%22%20y%3D%22217.75625%22%3EVeuillez%20Defiler%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                                     data-holder-rendered="true">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            @foreach($property->images as $key=>$img)
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" width="800" height="400"
                                                         data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text="
                                                         alt=""
                                                         src="{{asset('storage/images/'.$img->resizedfilename)}}"
                                                         data-holder-rendered="true">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3> Image:{{ $key+1 }}</h3>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                           data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                           data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Modif start-->
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body p-0">
                                    <table class="table table-hover table-striped table-align-middle mb-0">
                                        <thead>
                                        <tr>
                                            <th>@lang("Attribuer des Agents")</th>
                                            <th>@lang("Modifier")</th>
                                            <th>@lang("Desactiver")</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(Auth::user()->hasrole('Admin'))
                                        <tr>
                                            <td>@lang("Attribuer des Agents")</td>
                                            <td>
                                                <label class="switch switch-label switch-pill switch-success">
                                                    <input id="assign-agent" class="switch-input" type="checkbox">
                                                    <span class="switch-slider" data-checked="On"
                                                          data-unchecked="Off"></span>
                                                </label>
                                            </td>
                                            <td>
                                                @lang("Attribuer des agents")
                                            </td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <td>@lang("Modifer")</td>
                                            <td>
                                                <label class="switch switch-label switch-pill switch-warning">
                                                    <input id="update" class="switch-input" type="checkbox">
                                                    <span class="switch-slider" data-checked="On"
                                                          data-unchecked="Off"></span>
                                                </label>
                                            </td>
                                            <td>Modifier</td>
                                        </tr>
                                        <tr>
                                            <td>@lang("Desactiver")</td>
                                            <td>
                                                <label class="switch switch-label switch-pill switch-danger">
                                                    <input id="disable" class="switch-input" type="checkbox">
                                                    <span class="switch-slider" data-checked="On"
                                                          data-unchecked="Off"></span>
                                                </label>
                                            </td>
                                            <td>
                                                Desactiver
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end Modif-->

                            <!-- card agents  -->
                            <div id="card-agent" class="card" hidden>
                                <div class="card-header"> @lang("Liste des Agents Immobiliers ")</div>
                                <div class="card-body">
                                    <div id="DataTables_Table_0_wrapper"
                                         class="dataTables_wrapper dt-bootstrap4 no-footera table-responsive">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-striped table-bordered"
                                                       id="DataTables_Table_0"
                                                       role="grid"
                                                       aria-describedby="DataTables_Table_0_info"
                                                       style="border-collapse: collapse !important">
                                                    <thead>
                                                    <tr role="row">
                                                        <th> @lang('ID')</th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="DataTables_Table_0"
                                                            rowspan="1" colspan="1" aria-sort="ascending"
                                                            aria-label="Username: activate to sort column descending"
                                                            style="width: 235px;">Username
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Date registered: activate to sort column ascending"
                                                            style="width: 201px;">Date registered
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Role: activate to sort column ascending"
                                                            style="width: 88px;">Role
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Status: activate to sort column ascending"
                                                            style="width: 98px;">Status
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Actions: activate to sort column ascending"
                                                            style="width: 209px;">Actions
                                                        </th>
                                                        <th>
                                                            @lang("Attribuer /Dissocier")
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="users_table">
                                                    @foreach($userAgents as $user)
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1"><a id="lien"
                                                                                     href="#">{{$user->id}}</a></td>
                                                            <td class="sorting_1">{{$user->name .'  '.$user->last_name}}</td>
                                                            <td>{{$user->created_at}}</td>
                                                            <td>
                                                                @foreach($user->roles as $user_role)

                                                                    @if($user_role->name =='customer')
                                                                        @php $badgeClass ='primary' @endphp
                                                                    @elseif($user_role->name =='Agents')
                                                                        @php $badgeClass='warning' @endphp
                                                                    @elseif($user_role->name =='Admin')
                                                                        @php $badgeClass='success' @endphp
                                                                    @endif
                                                                    <span
                                                                        class="badge badge-{{$badgeClass}}">{{$user_role->name}}</span>
                                                                @endforeach
                                                            </td>

                                                            <td>
                                                                @if($user->email_verified_at === null)
                                                                    @php $badgeclasss ='danger'@endphp
                                                                    @php $info ='Non Active' @endphp
                                                                @else
                                                                    @php $badgeclasss ='success' @endphp
                                                                    @php $info ='Active' @endphp
                                                                @endif
                                                                <span
                                                                    class="badge badge-{{$badgeclasss}}"> {{$info}} </span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-success" data-toggle="modal"
                                                                   data-target="#largeModal"
                                                                   id="show-user"
                                                                   data-info="{{$user->id}},
                                                           {{$user->name}},
                                                           {{$user->last_name}},
                                                           {{$user->email}},
                                                           {{$user_role->name}},
                                                           {{$user->country_id}},
                                                            {{$user->email_verified_at}}
                                                                   @foreach($user->assignproperty as $key=>$myproperty)
                                                                   {{$myproperty->id}}
                                                                   {{$myproperty->name}}
                                                                   @endforeach">
                                                                    <i class="fa fa-search-plus"></i>
                                                                </a>
                                                                <a class="btn btn-info" data-toggle="modal"
                                                                   data-target="#primaryModal"
                                                                   id="edit-user"
                                                                   data-info="
                                                           {{$user->id}},
                                                           {{$user->name}},
                                                           {{$user->last_name}},
                                                           {{$user->email}},
                                                           {{$user->password}},
                                                           {{$user_role->name}},
                                                           {{$user->country_id}},

                                                               ">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a class="btn btn-danger" data-toggle="modal"
                                                                   data-target="#dangerModal"
                                                                   id="delete-user" data-id="{{$user->id}}"
                                                                   data-info="
                                                           {{$user->id}},
                                                           {{$user->email}},

                                                            {{$user_role->name}},
                                                           ">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <label
                                                                    class="switch switch-label switch-pill switch-success">
                                                                    <input id="assign" class="switch-input"
                                                                           type="checkbox"
                                                                           data-id="{{$user->id}},{{$property->id}}">
                                                                    <span class="switch-slider" data-checked="On"
                                                                          data-unchecked="Off"></span>
                                                                </label>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end agents -->
                        </div>
                        <div id="update-col" class="col-sm-6" hidden>
                            <div class="card">
                                <div class="card-header">
                                    <strong>Modifier</strong> Bien
                                </div>
                                <div class="card-body">
                                    <form id="propertyModifForm" class="form-horizontal" action="" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="text-input">@lang("Titre du bien")</label>
                                            <div class="col-md-9">
                                                <input class="" id="property_id" type="text" value="{{$property->id}}"
                                                       hidden>
                                                <input class="form-control" id="name" type="text" name="text-input"
                                                       value="{{$property->name}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="textarea-input">@lang("Description du bien")</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="description" name="textarea-input"
                                                          rows="9"
                                                          placeholder="Description.."
                                                          value="{{$property->description}}"> {{$property->description}}

                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="file-input">@lang("Document du bien")</label>
                                            <div class="col-md-9">
                                                <input id="docfile" type="file" name="file-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="text-input">@lang("Adresse")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="autocomplete" type="text"
                                                       name="text-input" value="{{$property->adresse}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="text-input">@lang("route")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="street_number" type="text"
                                                       name="text-input" value="{{$property->street_number}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="text-input">@lang("Rue")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="route" type="text" name="text-input"
                                                       value="{{$property->route}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="text-input">@lang("Ville")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="locality" type="text" name="text-input"
                                                       value="{{$property->locality}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="text-input">@lang("Région")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="administrative_area_level_1" type="text"
                                                       name="text-input"
                                                       value="{{$property->administrative_area_level_1}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="text-input">@lang("Code Postal")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="postal_code" type="text"
                                                       name="text-input" value="{{$property->postal_code}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="text-input">@lang("Pays")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="country" type="text" name="text-input"
                                                       value="{{$property->country}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="text-input">@lang("Latitude ")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="latitude" type="text" name="text-input"
                                                       value="{{$property->latitudeposition}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="text-input">@lang("Longitude")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="longitude" type="text" name="text-input"
                                                       value="{{$property->longitudeposition}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="select1">@lang("Catégorie")</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="propertytype_id" name="select1">
                                                    <option
                                                        value="{{$property->propertytype['name']}}"> {{$property->propertytype['name']}}</option>
                                                </select>
                                            </div>
                                        </div>

                                        {{--                                        @if($property->propertytype['name']!="Terrain")--}}
                                        <div class="form-group row">
                                            <label id="label_meuble"
                                                   class="col-md-3 col-form-label">@lang("meublé")</label>
                                            <div class="col-md-9 col-form-label">
                                                @if($property->meuble=="yes")
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="meuble" type="checkbox"
                                                               value="" checked>
                                                        <label class="form-check-label" for="radio1"></label>
                                                    </div>
                                                @else
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="meuble" type="checkbox"
                                                               value="">
                                                        <label class="form-check-label" for="radio1"></label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!--caracteristiques-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" id="label_rooms"
                                                   for="text-input">@lang("Nombre de Chambre")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="room" type="number" name="text-input"
                                                       min="0"
                                                       value="{{$property->rooms}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label id="label_douche" class="col-md-3 col-form-label"
                                                   for="text-input">@lang("Nombre de Douche")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="bathroom" type="number"
                                                       name="text-input"
                                                       value="{{$property->bathRooms}}" min="0">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label id="label_garages" class="col-md-3 col-form-label"
                                                   for="text-input">@lang("Nombre de Garages")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="garage" type="number" name="text-input"
                                                       value="{{$property->garages}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label id="label_piscine" class="col-md-3 col-form-label"
                                                   for="text-input">@lang("Nombre de Piscine")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="piscine" type="number" name="text-input"
                                                       value="{{$property->swimmingpool}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <!--fin caracteristiques -->

                                        <div class="form-group row">
                                            <label id="label_standing" class="col-md-3 col-form-label"
                                                   for="select2">@lang("Modifier le Standing")</label>
                                            <div class="col-md-9">
                                                <select class="form-control form-control-lg" id="standing_id"
                                                        name="select2">
                                                    <option
                                                        value="{{$property->standing['stanging_name']}}">{{$property->standing['standing_name']}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{--                                        @endif--}}
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"
                                                   for="date-input">@lang("Date Construction")</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="buildingdate" type="date"
                                                       name="date-input" value="{{$property->buildingdate}}">
                                                <span class="help-block">@lang("Svp une date valide ")</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="text-input">@lang("Surface")
                                                m<sup>2</sup></label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="area" type="number" min="0"
                                                       value="{{$property->area}}">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button id="soumettre" class="btn btn-sm btn-primary" type="submit">
                                                <i class="fa fa-dot-circle-o"></i> @lang("Modifier")</button>
                                            <button class="btn btn-sm btn-danger" type="reset">
                                                <i class="fa fa-ban"></i>@lang("Supprimer")</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify">
                                        @lang("Mettre a jour les Images")
                                    </i>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{url('images-upate')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-6 col-form-label"
                                                   for="file-multiple-input">@lang("Mettre a jour les Images")</label>
                                            <div class="col-md-9">
                                                <input type="text" name="property_id" value="{{$property->id}}" hidden>
                                                <input id="file-multiple-input" type="file" name="file-multiple-input[]"
                                                       multiple="">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button id="soumettre_img" class="btn btn-sm btn-primary" type="submit">
                                                <i class="fa fa-dot-circle-o"></i> @lang("Mise A jour")</button>
                                            <button class="btn btn-sm btn-danger" type="reset">
                                                <i class="fa fa-ban"></i>@lang("Supprimer")</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> @lang("Mettre à jour les détails du Bail")
                                    <small></small>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        @csrf
                                        @foreach($property->typetransactions as $trans)
                                            <div class="form-group row">
                                                <input class="" id="property_id" type="text" value="{{$property->id}}"
                                                       hidden>
                                                <label class="col-md-3 col-form-label"
                                                       for="select2">@lang("Modifier le type de baille")</label>
                                                <div class="col-md-9">
                                                    <select class="form-control form-control-lg" id="typetransaction"
                                                            name="select2">
                                                        {{--                                                        <option value="0">{{$trans->name}}</option>--}}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" id="label_rooms"
                                                       for="text-input">@lang("Montant")</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="ammount" type="number" name="text-input"
                                                           min="0"
                                                           value="{{$trans->pivot->ammount}}">
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label"
                                                       for="date-input">@lang("Date Visite")</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="date-visite" type="date"
                                                           name="date-input" value="{{$trans->pivot->visiteDate}}">
                                                    <span class="help-block">@lang("Svp une date valide ")</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label"
                                                       for="date-input">@lang("Date Début")</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="date-begin" type="date"
                                                           name="date-input" value="{{$trans->pivot->beginDate}}">
                                                    <span class="help-block">@lang("Svp une date valide ")</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label"
                                                       for="date-input">@lang("Date Fin")</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="date-end" type="date"
                                                           name="date-input" value="{{$trans->pivot->endDate}}">
                                                    <span class="help-block">@lang("Svp une date valide ")</span>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="card-footer">
                                            <button id="submit_bail" class="btn btn-sm btn-primary" type="submit">
                                                <i class="fa fa-dot-circle-o"></i> @lang("Modifier")</button>
                                            <button class="btn btn-sm btn-danger" type="reset">
                                                <i class="fa fa-ban"></i>@lang("Supprimer")</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>


                    @include('propertiesmanagement.agents-modale')
                </div>
            </div>
        </main>

    </div>

    <script>


        window.addEventListener('DOMContentLoaded', (e) => {
            /*
            *
            * */

            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;     // getMonth() is zero-based
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#buildingdate').attr('max', maxDate);
            $('#date-visite').attr('min', maxDate);
            $('#date-begin').attr('min', maxDate);
            $('#date-end').attr('min', maxDate);


            //end date input


            /*
            STANDING
             */
            fetch('{{url('/standing')}}')
                .then(response => {
                    if (response.ok) {
                        response.json().then(standing => {
                            var stand = "<option disabled style='color:blue' ><?php echo $property->standing['standing_name'] ?></option>";
                            for (let i = 0; i < standing.length; i++) {
                                stand += "<option value =" + standing[i].id + ">" + standing[i].standing_name + "</option>";
                                $('#standing_id').html(stand);
                            }
                        })
                    } else {
                        console.error(' Reponse serveur : ' + response.status);
                    }

                });

            //getpropertyType
            //2
            fetch('{{url('/property-type')}}')
                .then(response => {
                    if (response.ok) {
                        response.json().then(propertytype => {
                            var proptype = "<option disabled style='color:blue' > <?php echo $property->propertytype['name'] ?></option>";
                            for (let i = 0; i < propertytype.length; i++) {
                                proptype += "<option value  =" + propertytype[i].id + ">" + propertytype[i].name + "</option>";
                                $('#propertytype_id').html(proptype);
                            }
                        })
                    } else {
                        console.error(' Reponse serveur : ' + response.status);
                    }

                });

            fetch('{{url('/typetransaction')}}')
                .then(response => {
                    if (response.ok) {
                        response.json().then(typetransaction => {

                            var type_trans = '<option disabled style=\'color:blue\'> <?php echo $trans->name ?></option>';
                            for (let i = 0; i < typetransaction.length; i++) {

                                type_trans += "<option value =" + typetransaction[i].id + ">" + typetransaction[i].name + "</option>";
                                $('#typetransaction').html(type_trans);


                            }
                        })
                    } else {

                        console.error(' Reponse serveur : ' + response.status);
                    }

                });
            // get subpropertyTYPE
            $('#propertytype_id').on('change', function () {
                $('#meuble').hide();
                $("input[type='number']").hide();
                // hide label
                $('#label_meuble').hide();
                $('#label_rooms').hide();
                $('#label_garages').hide();
                $('#label_piscine').hide();
                $('#label_standing').hide();
                $('#label_douche').hide();
                //end hiding
                $('#standing_id').hide();
                $('#surface').show();
                if ($('#propertytype_id option:selected').text() !== 'Terrain') {
                    $('#meuble').fadeIn("slow");
                    $("input[type='number']").fadeIn("slow");
                    $('#standing_id').fadeIn("slow");
                    $('#label_meuble').fadeIn("slow");
                    $('#label_rooms').fadeIn("slow");
                    $('#label_garages').fadeIn("slow");
                    $('#label_piscine').fadeIn("slow");
                    $('#label_standing').fadeIn("slow");
                    $('#label_douche').fadeIn("slow");
                }
            });

            /*
             end PropertyTypeData
             */

            $('#docfile').on('change', function (e) {
                val = $('#docfile').val();
                var file_type = val.substr(val.lastIndexOf('.')).toLowerCase();
                if (file_type === '.pdf') {
                    $('#docfile').prop('disabled', true);

                } else {
                    $('#docfile').autofocus;
                    alert(' Veuillez choisir un fichier .PDF');
                    $('#docfile').val('');
                }
            });

            // INSERT DATA IN DATABASE HERE
            $('#soumettre').on('click', function () {
                event.preventDefault();

                if ($('#meuble').is(':checked')) {
                    $('#meuble').val("yes");
                }

                if ($('#propertytype_id option:selected').text() == 'Terrain') {
                    $('#standing_id').val(0);
                }
                var form = $('#propertyModifForm');
                var token = $("input[name='_token']").val();
                fetch('{{url('/property-update')}}', {
                    headers: {
                        "Content-type": "application/json;charset=utf-8",
                        "Accept": "application/json,text-plain",
                        "X-Requested-Width": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                    },
                    method: 'POST',
                    credentials: "same-origin",
                    body: JSON.stringify({
                        name: $('#name').val(),
                        description: $('#description').val(),
                        area: $('#area').val(),
                        buildingdate: $('#buildingdate').val(),
                        latitudeposition: $('#latitude').val(),
                        longitudeposition: $('#longitude').val(),
                        propertytype_id: $('#propertytype_id').val(),
                        street_number: $('#street_number').val(),
                        adresse: $('#autocomplete').val(),
                        route: $('#route').val(),
                        locality: $('#locality').val(),
                        administrative_area_level_1: $('#administrative_area_level_1').val(),
                        postal_code: $('#postal_code').val(),
                        country: $('#country').val(),
                        docfile: $('#docfile').val(),
                        room: $('#room').val(),
                        bathroom: $('#bathroom').val(),
                        garage: $('#garage').val(),
                        piscine: $('#piscine').val(),
                        meuble: $('#meuble').val(),
                        standing: $('#standing_id').val(),
                        property_id: $('#property_id').val(),
                        //filename:$('#file-multiple-input').val(),
                    })
                })
                    .then((data) => {
                        if (data.ok) {
                            data.json().then(validation => {
                                if ($.isEmptyObject(validation.error)) {
                                    document.getElementById("propertyModifForm").reset();
                                    alertify.success(' ' + validation.success);
                                    console.log(validation.success);
                                    $("#update").prop("checked", false);
                                    window.location.reload();

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


            // modification des détails de la transaction
            $('#submit_bail').on('click', function () {
                event.preventDefault();
                var token = $("input[name='_token']").val();
                fetch('/transaction-update', {
                    headers: {
                        "Content-type": "application/json;charset=utf-8",
                        "Accept": "application/json,text-plain",
                        "X-Requested-Width": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                    },
                    method: 'POST',
                    credentials: "same-origin",
                    body: JSON.stringify({
                        typetransaction: $('#typetransaction').val(),
                        beginDate: $('#date-begin').val(),
                        endDate: $('#date-end').val(),
                        visiteDate: $('#date-visite').val(),
                        property: $('#property_id').val(),
                        ammount: $('#ammount').val(),

                    })
                })
                    .then((data) => {
                        if (data.ok) {
                            data.json().then(validation => {
                                if ($.isEmptyObject(validation.error)) {
                                    alertify.success(' ' + validation.success);
                                    console.log(validation.success);
                                    $("#update").prop("checked", false);
                                    window.location.reload();

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

                // modifier la photo
            });

               //
            function printErrorMsg(msg) {
                $.each(msg, function (key, value) {
                    alertify.error('Renseignez les champs :' + value);
                });

            }
        });
    </script>




@endsection
@section('script')
    <script src="{{asset('datatables/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('datatables/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('datatables/js/dataTables.js')}}"></script>
    <script src="{{asset('important/scripts/datatableproperty-manip.js')}}"></script>
@endsection
