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
                                    <li class="breadcrumb-item active">Analytics
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
                //
            </div>
        </div>
    </div>
@endsection


