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
    <title>Deep Breadth - App</title>
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
     {{-- survey css --}}

    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/vendors/css/survey_style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
    {{-- end survey css --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/vendors/css/vendors.min.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/vendors/css/charts/apexcharts.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/vendors/css/extensions/tether-theme-arrows.css')}}">
 
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/vendors/css/extensions/shepherd-theme-default.css')}}">
    <!-- END: Vendor CSS-->
    {{-- jquery import start --}}
    <script src="jquery-3.4.1.min.js"></script>
    {{-- Jquery import End --}}
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/components.css')}}">
  
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/pages/dashboard-analytics.css')}}">
   
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/pages/survey.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/pages/survey2.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/style.css')}}">
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
                        <div class="logo"> <img src="{{asset('assets/backend/app-assets/images/logo/text_logo_small.jpg')}}" 
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
                        <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon feather icon-mail"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon feather icon-calendar"></i></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                       
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Dashboard..." tabindex="-1" data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6><small class="notification-text"> Are your going to meet me tonight?</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6><small class="notification-text">You got new order of goods.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small class="notification-text">Server have 99% CPU usage.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6><small class="notification-text">Cake sesame snaps cupcake</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6><small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{auth::user()->name}}</span><span class="user-status">Available</span></div>
                        <span>
                            @if(isset(Auth::user()->avatar))

                            <img class="round" src="{{ url(Auth::user()->avatar) }}" alt="{{Auth::user()->name}}" height="40" width="40">

                        @else
                            <img class="round" src="{{asset('assets/backend/app-assets/images/extras/dummy.png')}}" alt="avatar" height="40" width="40">
                        
                        @endif
                        </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{ route('edit_company_profile',['id'=>auth()->user()->id]) }}"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a>
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
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{asset('assets/backend/app-assets/images/icons/xls.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{asset('assets/backend/app-assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{asset('assets/backend/app-assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{asset('assets/backend/app-assets/images/icons/doc.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="{{asset('assets/backend/app-assets/images/portrait/small/avatar-s-8.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="{{asset('assets/backend/app-assets/images/portrait/small/avatar-s-1.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="{{asset('assets/backend/app-assets/images/portrait/small/avatar-s-14.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="{{asset('assets/backend/app-assets/images/portrait/small/avatar-s-6.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
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
                            <h2 class="brand-text mb-0">DeepBreadth</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include/includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="active dropdown nav-item" data-menu="dropdown"><a class="nav-link" href="{{ url('/user/redirect') }}"><i class="feather icon-home"></i><span data-i18n="Dashboard">Dashboard</span></a>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-grid"></i><span data-i18n="Pages">Actions</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu"><a class="dropdown-item" data-toggle="modal" data-target="#inlineForm" data-i18n="Authentication"><i class="feather icon-file-minus"></i>Survey Form</a>
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
    @include('modals.survey')

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
    <script src="{{asset('/assets/backend/app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/vendors/js/extensions/tether.min.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/vendors/js/extensions/shepherd.min.js')}}"></script>
    <!-- END: Page Vendor JS-->
{{-- Data Tables by Develooper --}}
    <script src="{{asset('/assets/backend/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/js/scripts/datatables/datatable.js')}}"></script>

{{-- end --}}
    <!-- BEGIN: Theme JS-->
    <script src="{{asset('/assets/backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->
    <script src="{{asset('/assets/backend/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('/assets/backend/app-assets/js/scripts/extensions/sweet-alerts.js')}}"></script>

    <!-- BEGIN: Page JS-->
    <script src="{{asset('/assets/backend/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
    <!-- END: Page JS-->

    {{-- Chart Graph --}}
    <script src="{{asset('/assets/backend/app-assets/js/scripts/charts/chart-apex.js')}}"></script>
@yield('scripts')   
</body>
<!-- END: Body-->

</html>