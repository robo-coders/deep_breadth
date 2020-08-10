@extends('backend.admin')
@section('body')

<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Edit</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('redirect_user') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Company
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
	<section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Company</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="{{ route('update_company_by_admin',['id'=>$edit[0]['id']]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-8">
                                                                <div class="media">
                                                                    <a href="javascript: void(0);">
                                                                        <img src="{{asset('assets/backend/app-assets/images/portrait/small/avatar-s-12.jpg')}}" class="rounded mr-75" alt="profile image" height="64" width="64">
                                                                    </a>
                                                                    <div class="media-body mt-75">
                                                                        <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                                            <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">Upload new photo</label>
                                                                            <input type="file" id="account-upload" name="avatar" hidden>
                                                                            <button class="btn btn-sm btn-outline-warning ml-50">Reset</button>
                                                                        </div>
                                                                        <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                                                                size of
                                                                                800kB</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="fname-icon" class="form-control @error('first_name') is-invalid @enderror" name="company_name" placeholder="Company Name" value="{{$edit[0]['users_info'][0]['company_name']}}" required autocomplete="first_name" autofocus>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-layers"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="fname-icon" class="form-control" name="company_location" value="{{$edit[0]['users_info'][0]['company_location']}}" placeholder="Location">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-map-pin
"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="fname-icon" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name" value="{{$edit[0]['name']}}" required autocomplete="first_name" autofocus>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-user"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="fname-icon" class="form-control" name="last_name" placeholder="Last Name" value="{{$edit[0]['last_name']}}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-user"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="email" id="email-icon" class="form-control" name="email" placeholder="Email" value="{{$edit[0]['email']}}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-mail"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="number" id="contact-icon" class="form-control" name="mobile" placeholder="Mobile" value="{{$edit[0]['mobile']}}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-smartphone"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
       </div>
   </div>
@endsection