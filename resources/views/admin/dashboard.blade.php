@extends('backend.admin')
@section('body')
<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Admin</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('redirect_user') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Simple
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('update_admin_self_profile'))
                        <div class="alert alert-success" role="alert">
                            <h4><i class="fa fa-check"></i>&nbsp;Success !</h4>
                            <p class="alert-message">{{ session('update_admin_self_profile') }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- Column selectors with Export Options and print table -->
                <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Company Table</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table table-borderless dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Location</th>
                                                        <th>Coordinator</th>
                                                        <th>Email</th>
                                                        <th>Mobile</th>
                                                        <th>Created at</th>
                                                    </tr>
                                                </thead>
                                                @foreach ($views as $view)
                                                    <tbody>
                                                    <tr>
                                                        @foreach ($view->users_info as $data)
                                                        <td>{{$data->company_name}}</td>
                                                        <td>{{$data->company_location}}</td>
                                                        @endforeach
                                                        <td> {{$view->name}} {{$view->last_name}}</td>
                                                        <td> {{$view->email}}  </td>
                                                        <td>{{$view->mobile}}</td>
                                                        <td> {{$view->created_at->toFormattedDateString()}} </td>
                                                    </tr>                                                 
                                                </tbody>
                                                @endforeach
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Column selectors with Export Options and print table -->
            </div>
        </div>
    </div>
@endsection


