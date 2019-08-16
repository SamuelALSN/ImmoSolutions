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
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
                <!-- Breadcrumb Menu-->
                <li class="breadcrumb-menu d-md-down-none">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <a class="btn" href="#">
                            <i class="icon-speech"></i>
                        </a>
                        <a class="btn" href="./">
                            <i class="icon-graph"></i>  Dashboard</a>
                        <a class="btn" href="#">
                            <i class="icon-settings"></i>  Settings</a>
                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header"> @lang("Bien") : {{$property->id}}</div>
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
                                        {{$property->rooms}}@lang("Chambre") || {{$property->bathRooms}} @lang("Douche")
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
                                            Du {{$typetrans->pivot->beginDate}} au {{$typetrans->pivot->endDate}}
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
                                    <li class="active" data-target="#carouselExampleCaptions" data-slide-to="0"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                             data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=Veuillez defiler"
                                             alt="Veuillez defilez [800x400]"
                                             src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9274%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9274%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9296875%22%20y%3D%22217.75625%22%3EVeuillez%20Defiler%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                             data-holder-rendered="true">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    @foreach($property->images as $key=>$img)
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
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
                                    <th>@lang("Modifer")</th>
                                    <th>@lang("Desactiver")</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>@lang("Attribuer des Agents")</td>
                                    <td>
                                        <label class="switch switch-label switch-pill switch-success">
                                            <input class="switch-input" type="checkbox">
                                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                                        </label>
                                    </td>
                                    <td>
                                        @lang("Attribuer des agents")
                                    </td>
                                </tr>
                                <tr>
                                    <td>@lang("Modifer")</td>
                                    <td>
                                        <label class="switch switch-label switch-pill switch-warning">
                                            <input class="switch-input" type="checkbox">
                                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                                        </label>
                                    </td>
                                    <td>Modifier</td>
                                </tr>
                                <tr>
                                    <td>@lang("Desactiver")</td>
                                    <td>
                                        <label class="switch switch-label switch-pill switch-danger">
                                            <input class="switch-input" type="checkbox">
                                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
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
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body p-0">
{{--                            <table class="table table-hover table-striped table-align-middle mb-0">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>@lang("Agents")</th>--}}
{{--                                    <th>@lang("Attribuer/Dissocier")</th>--}}
{{--                                    <th></th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}

{{--                                <tbody>--}}
{{--                                @foreach($userAgents as $agents)--}}
{{--                                <tr>--}}

{{--                                    <td>{{$agents->name}}</td>--}}
{{--                                    <td>--}}

{{--                                        <label class="switch switch-label switch-pill switch-success">--}}
{{--                                            <input class="switch-input" type="checkbox">--}}
{{--                                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>--}}
{{--                                        </label>--}}
{{--                                    </td>--}}
{{--                                    <td></td>--}}

{{--                                </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}

{{--                            </table>--}}


                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footera table-responsive">
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
                                                    aria-label="Username: activate to sort column descending"
                                                    style="width: 235px;">Username
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Date registered: activate to sort column ascending"
                                                    style="width: 201px;">Date registered
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Role: activate to sort column ascending"
                                                    style="width: 88px;">Role
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 98px;">Status
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 209px;">Actions
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody id="users_table">
                                            @foreach($userAgents as $user)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{$user->id}}</td>
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
                                                        <span class="badge badge-{{$badgeclasss}}"> {{$info}} </span>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-success" data-toggle="modal"
                                                           data-target="#largeModal"
                                                           id="show-user"
                                                           data-info="{{$user->id}},
                                                           {{$user->name}},
                                                           {{$user->last_name}},
                                                           {{$user->email}},
                                                           {{$user->password}},
                                                           {{$user_role->name}},
                                                           {{$user->country_id}},
                                                            {{$user->email_verified_at}}">
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
            </div>
        </main>

    </div>
    @include('common.footer')
@endsection
@section('script')
    <script src="{{asset('datatables/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('datatables/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('datatables/js/dataTables.js')}}"></script>
    <script src = "{{asset('important/scripts/datatableproperty-manip.js')}}"></script>
@endsection
