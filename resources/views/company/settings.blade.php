@extends('backend.company') @section('body')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Dashboard</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('redirect_user') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Settings
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
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            <h4><i class="fa fa-check"></i>&nbsp;Alert !</h4>
                            <p class="alert-message">{{ session('error') }}</p>
                        </div>
                    @endif
                </div>
                <div class="col-md-12">
                    @if (count($errors)>0)
                        <div class="alert alert-danger" role="alert">
                            <h4><i class="fa fa-check"></i>&nbsp;Alert !</h4>
                            @foreach ($errors->all() as $error)
                                <p class="alert-message">
                                    {{$error}}
                                </p>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="col-md-12">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <h4><i class="fa fa-check"></i>&nbsp;Success !</h4>
                        <p class="alert-message">{{ session('success') }}</p>
                    </div>
                    @endif
                </div>
            </div>
            <div id="user-profile">

                <section id="profile-info">
                    <div class="row">
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75 active" id="account-pill-notifications" data-toggle="pill" href="#account-vertical-notifications" aria-expanded="false">
                                        <i class="feather icon-home mr-50 font-medium-3"></i> Dashboard
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="account-vertical-notifications" role="tabpanel" aria-labelledby="account-pill-notifications" aria-expanded="false">
                                                <div class="row">
                                                    <h6 class="m-1">Mode</h6>
                                                    <div class="col-12 mb-1">
                                                        <form action="{{ route('switchDashboardMode') }}" method="post">
                                                            @csrf
                                                            <div class="row">
                                                                <h6 class="m-1">Switch to dark</h6>
                                                                <div class="col-12 mb-1">
                                                                    <div class="custom-control custom-switch custom-control-inline">
                                                                        @if(Auth::user()->userDashboard->dashboard == '1')
                                                                            <input type="checkbox" name="dashboardValue" class="custom-control-input" checked id="accountSwitch1">
                                                                        @else
                                                                            <input type="checkbox" name="dashboardValue" class="custom-control-input" id="accountSwitch1">
                                                                        @endif
                                                                        <label class="custom-control-label mr-1" for="accountSwitch1"></label>
                                                                        <span class="switch-label w-100">
                                                                            Dark mode can reduce eye strain in low-light conditions. 100% contrast (white on a black background) can be harder to read and cause more eye strain.
                                                                        </span>
                                                                    </div>
                                                                </div>
    
                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                        changes</button>
                                                                    <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </section>
            </div>

        </div>
    </div>
</div>
</ <!-- END: Content-->

@endsection