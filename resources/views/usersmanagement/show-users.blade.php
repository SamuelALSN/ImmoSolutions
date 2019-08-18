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
                <!--table-->
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> @lang('Users')
                            <div class="card-header-actions">
                                <a class="card-header-action" href="" target="_blank">
                                    <small class="text-muted">@lang('Lists')</small>
                                </a>
                                <button class="btn btn-primary mb-1" type="button" data-toggle="modal" id="create-user"
                                        data-target="#primaryModal">@lang('create user')
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
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
                                            @foreach($users as $user)
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
                </div>
                <!--table end -->


                <!-- /.modal add -->
                @include('usersmanagement.user-modale')
                <!-- /.modal-end-->

            </div>
        </main>
    </div>
@endsection
@section('script')
    <script src="{{asset('datatables/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('datatables/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('datatables/js/dataTables.js')}}"></script>
   <script src = "{{asset('important/scripts/datatableproperty-manip.js')}}"></script>
@endsection
