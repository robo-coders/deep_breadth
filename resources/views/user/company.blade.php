@extends('backend.admin')
@section('body')
<div class="app-content content">
   <div class="content-wrapper">
      <div class="content-header row">
         <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
               <div class="col-12">
                  <h2 class="content-header-title float-left mb-0">Manage</h2>
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
         @if (session()->has('create_company'))
         <div class="alert alert-success" role="alert">
            <h4><i class="fa fa-check"></i>&nbsp;Success !</h4>
            <p class="mb-0">
               {{session()->get('create_company')}}
            </p>
         </div>
         @endif
         @if (session()->has('update_company'))
         <div class="alert alert-success" role="alert">
            <h4><i class="fa fa-check"></i>&nbsp;Success !</h4>
            <p class="mb-0">
               {{session()->get('update_company')}}
            </p>
         </div>
         @endif
         <section id="multiple-column-form">
            <div class="row match-height">
               <div class="col-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Create a new Company</h4>
                     </div>
                     <div class="card-content">
                        <div class="card-body">
                           <form class="form" action="{{ route('company_created_by_admin') }}" method="post" enctype="multipart/form-data">
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
                                                      800kB</small>
                                                   </p>
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
                                                <input type="text" id="fname-icon" class="form-control @error('first_name') is-invalid @enderror" name="company_name" placeholder="Company Name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
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
                                                <input type="text" id="fname-icon" class="form-control" name="company_location" placeholder="Location">
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
                                                <input type="text" id="fname-icon" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
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
                                                <input type="text" id="fname-icon" class="form-control" name="last_name" placeholder="Last Name">
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
                                                <input type="email" id="email-icon" class="form-control" name="email" placeholder="Email">
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
                                                <input type="number" id="contact-icon" class="form-control" name="mobile" placeholder="Mobile">
                                                <div class="form-control-position">
                                                   <i class="feather icon-smartphone"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                       <div class="form-group row">
                                          <div class="col-md-12">
                                             <div class="position-relative has-icon-left">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" id="pass-icon" required autocomplete="new-password"> @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span> @enderror
                                                <div class="form-control-position">
                                                   <i class="feather icon-lock"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                       <div class="form-group row">
                                          <div class="col-md-12">
                                             <div class="position-relative has-icon-left">
                                                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="pass-icon" placeholder="Confirm Password">
                                                <div class="form-control-position">
                                                   <i class="feather icon-lock"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <button type="submit" class="btn btn-primary mr-1 mb-1">Create</button>
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
      <!-- Table rows start -->
      <div class="row" id="table-hover-row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">List of Companies</h4>
               </div>
               <div class="card-content">
                  <div class="table-responsive">
                     <table class="table table-hover mb-0">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Avatar</th>
                              <th>Company Name</th>
                              <th>Location</th>
                              <th>Coordinator</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>User Role</th>
                              <th>Created at</th>
                              <th> </th>
                           </tr>
                        </thead>
                        <?php $serial = 1; ?>
                        @foreach ($views as $view)
                        <tbody>
                           <tr>
                              <th scope="row">{{$serial}}</th>
                              @if (isset($view->avatar))
                              <td> <img src="{{url($view->avatar)}}" alt="{{$view->name}}" class="img-cirlcle" width="60px" height="60px"></td>
                              @else
                              <td><img src="{{url('assets/backend/app-assets/images/extras/dummy.png')}}" alt="{{$view->name}}" class="img-cirlcle" width="60px" height="60px"></td>
                              @endif 
                              @foreach ($view->users_info as $data)
                              <td> {{$data->company_name}} </td>
                              <td> {{$data->company_location}} </td>
                              @endforeach
                              <td>{{$view->name}} {{$view->last_name}}</td>
                              <td>{{$view->email}}</td>
                              <td>{{$view->mobile}}</td>
                              <td>@if ($view->role == 1) {{'Admin'}} @elseif ($view->role == 2) {{'Company'}} @endif </td>
                              <td>{{$view->created_at->toFormattedDateString()}}</td>
                              <td>
                                 <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                       <a class="dropdown-item" href="{{ route('company_edit_by_admin',['id'=>$view->id]) }}">Edit</a>
                                       <a onclick="deleteDataCompany({{$view->id}})" class="dropdown-item">Delete</a>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                        <?php $serial++ ?>
                        @endforeach
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Table rows end -->
   </div>
</div>
@endsection