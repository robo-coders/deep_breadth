<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Deep Breadth - App</title>
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    {{-- jquery import start --}}
    <!--<script src="jquery-3.4.1.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    {{-- Jquery import End --}}
    
    <!-- BEGIN: Vendor CSS-->
   
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/components.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/backend/app-assets/css/style.css')}}">
    <!-- END: Custom CSS-->
   
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="">
                        <div class="logo"> <img src="{{asset('assets/backend/app-assets/images/logo/')}}" 
                            alt=""> </div>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                       
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{auth()->user()->name}}</span><span class="user-status">Available</span></div>
                        <span>
                        @if(isset(Auth::user()->avatar))

                            <img class="round" src="{{ url(Auth::user()->avatar) }}" alt="{{Auth::user()->name}}" height="40" width="40">

                        @else
                            <img class="round" src="{{asset('assets/backend/app-assets/images/extras/dummy.png')}}" alt="avatar" height="40" width="40">
                        
                        @endif
                        </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{ route('edit_admin_profile',['id'=>auth()->user()->id]) }}"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><i class="feather icon-power"></i> Logout</a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="{{asset('assets/backend/html/ltr/horizontal-menu-template/index')}}">
                            {{-- <div class="brand-logo"></div> --}}
                            <h2 class="brand-text mb-0">DeebBreadth</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include/includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="feather icon-home"></i><span data-i18n="Dashboard">Dashboard</span></a>
                        <ul class="dropdown-menu">
                            <li class="active" data-menu=""><a class="dropdown-item" href="{{ route('admin_dashboard') }}" data-toggle="dropdown" data-i18n="eCommerce"><i class="feather icon-airplay"></i>Simple</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="{{ route('admin_analytic_dashboard') }}" data-toggle="dropdown" data-i18n="Analytics"><i class="feather icon-activity"></i>Analytics</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-grid"></i><span data-i18n="Pages">Actions</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Authentication"><i class="feather icon-user"></i>User</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="{{ route('admin_index_by_admin') }}" data-toggle="dropdown" data-i18n="Login"><i class="feather icon-circle"></i>Admin</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="{{ route('company_index_by_admin') }}" data-toggle="dropdown" data-i18n="Register"><i class="feather icon-circle"></i>Company</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Charts &amp; Graphs</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Charts"><i class="feather icon-pie-chart"></i>Charts</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown" data-i18n="Apex"><i class="feather icon-circle"></i>abc</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown" data-i18n="Chartjs"><i class="feather icon-circle"></i>abc</a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown" data-i18n="Google Maps"><i class="feather icon-map"></i>Graphs</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    	@yield('body')	
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-shadow">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Deep Breadth,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Powered by: <a href="http://facebook.com/robocoders">Robo Coders</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('assets/backend/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('assets/backend/app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
    <!-- END: Page Vendor JS-->
{{-- Data Tables by Develooper --}}
    <script src="{{asset('assets/backend/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('assets/backend/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/backend/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/backend/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/backend/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/backend/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/backend/app-assets/js/scripts/datatables/datatable.js')}}"></script>

{{-- end --}}
    <!-- BEGIN: Theme JS-->
    <script src="{{asset('assets/backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('assets/backend/app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('assets/backend/app-assets/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->
    <script src="{{asset('assets/backend/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
    {{-- <script src="{{asset('assets/backend/app-assets/js/scripts/extensions/sweet-alerts.js')}}"></script> --}}

    <!-- BEGIN: Page JS-->
    {{-- <script src="{{asset('assets/backend/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script> --}}
    <!-- END: Page JS-->
    <script>
           function deleteData(id){
                var csrf_token=$('meta[name="csrf-token"]').attr('content');
                console.log('working', id, csrf_token);

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    confirmButtonClass: 'btn btn-primary',
                    cancelButtonClass: 'btn btn-danger ml-1',
                    buttonsStyling: false,
                }).then(function (result) {
                    if (result.value) {
                        $.ajax({
                            url: "{{ url('/delete/admin') }}" + '/' +id,
                            type: "POST",
                            data: {'_method' : 'POST', '_token' : csrf_token },
                            success: function(data) {
                                //table1.ajax.reload();
                                if (result.value) {
                                Swal.fire(
                                {
                                    type: "success",
                                    title: 'Deleted!',
                                    text: 'Your file has been deleted.',
                                    confirmButtonClass: 'btn btn-success',
                                }).then(function(){
                                    location.reload();
                                });
                        }
                    }
                })
            }
        })
    }
           
        function deleteDataCompany(id){
            var csrf_token=$('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-danger ml-1',
                buttonsStyling: false,
            }).then(function (result) {
                if (result.value) {
                    $.ajax({
                        url: "{{ url('/delete/company') }}" + '/' +id,
                        type: "POST",
                        data: {'_method' : 'POST', '_token' : csrf_token },
                        success: function(data) {
                            //table1.ajax.reload();
                            if (result.value) {
                            Swal.fire(
                            {
                                type: "success",
                                title: 'Deleted!',
                                text: 'Your file has been deleted.',
                                confirmButtonClass: 'btn btn-success',
                            }).then(function(){
                                location.reload();
                            });
                    }
                }
            })
        }
    })
}

    </script>
</body>
<!-- END: Body-->

</html>