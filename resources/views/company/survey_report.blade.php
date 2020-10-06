@extends('backend.company')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend/app-assets/css/colors.css')}}">
@endsection
@section('body')
<div class="app-content content">
   <div class="content-wrapper">
      <div class="content-header row">
         <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
               <div class="col-12">
                  <h2 class="content-header-title float-left mb-0">Company</h2>
                  <div class="breadcrumb-wrapper col-12">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('redirect_user') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Survey
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="content-body">
         <!-- Column selectors with Export Options and print table -->
         <section id="column-selectors">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Survey Report</h4>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive mt-1">
                                <table class="table table-hover-animation mb-0">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th width="300">Department</th>
                                            <th width="300">Performance</th>
                                            <th>Comments</th>
                                            <th>Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php $serial = 1; ?>
                                    @foreach ($views as $view)
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{$serial}}</th>
                                                <td> {{$view->department_name}} </td>
                                                <td>
                                                    <span>{{round($view->performance)}} %</span>
                                                    @If($view->performance > '85')
                                                        <div class="progress progress-bar-success mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar" style="width: {{$view->performance}}%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    @elseif($view->performance > '75')  
                                                        <div class="progress progress-bar-info mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar" style="width: {{$view->performance}}%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>  
                                                    @elseif($view->performance > '70')  
                                                        <div class="progress progress-bar-warning mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar" style="width: {{$view->performance}}%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div> 
                                                    @elseif($view->performance > '65')  
                                                        <div class="progress progress-bar-danger mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar" style="width: {{$view->performance}}%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>  
                                                    @else
                                                        <div class="progress progress-bar-dark mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar" style="width: {{$view->performance}}%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>      
                                                    @endif
                                                </td>
                                                <td> {{$view->comments}} </td>
                                                <td> {{$view->created_at}} </td>
                                                <td> 
                                                    <div class="dropdown">
                                                        <button class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Actions
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                           <a onclick="deleteSurveyComapny({{$view->id}})" class="dropdown-item">Delete</a>
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
         </section>
         <!-- Column selectors with Export Options and print table -->
      </div>
   </div>
</div>
@endsection