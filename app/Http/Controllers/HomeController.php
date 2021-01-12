<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\users_info;
use App\survey_data;
use Auth;
use DB;
use App\Http\Resources\UserResponse;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function admin()
    {
        $views = user::has('users_info')->with('users_info')->get();
        return view('admin.dashboard',compact('views'));
    }
    public function admin_analytic_dashboard()
    {
        $views = user::has('users_info')->with('users_info')->get();
        return view('admin.analytic_dashboard',compact('views'));
  
    }
    public function edit_admin($id){
        $view = user::find($id);
        return view('admin.edit_profile',compact('view'));
    }
    public function admin_index_by_admin(){
        
        $views = user::all();
        return view('user.admin',compact('views'));
    }
    public function company_index_by_admin(){
        $views = user::has('users_info')->with('users_info')->get();
        return view('user.company',compact('views'));
    }
    public function admin_edit_by_admin($id){
        $edit = user::find($id);
        return view('user.edit_admin',compact('edit'));
    }
    public function company()
    {
        $count = survey_data::where('user_id',Auth::user()->id)
        ->get()
        ->count();
        return view('company.dashboard',compact('count'));
    }
    public function company_edit_by_admin($id){
        /*
        $query = Attribute::query();
        if ($request->filled('id')) {
            $query->whereIn('id', str_getcsv($request->input('id')));
        }
        if ($request->filled('group')) {
            $query->whereHas('group', function($query) use($request) {
                $query->whereIn('name', str_getcsv($request->input('group')));
            });
        }
        return AttributeResource::collection(
            $query->with('group')->paginateByUrl(['per_page_max' => 1000])
        );
    }
        */
        $edit = user::findOrFail($id)->with('users_info')->where('id', '=', $id)->get();
        // return $edit[0]['users_info'][0]['company_name'];

// return new UserResponse::make($edit);
        /*  
 $query->whereHas('group', function($query) use($request) {
                $query->whereIn('name', str_getcsv($request->input('group')));
            });
        */
      //  has('users_info')->where('id','=',$id)->get();
        //->with('users_info')->get();
        // $edit = json_decode($edit[]);
      // $edit = (array)->$edit;
       // return new UserResponse($edit)->with('users_info');
        // retun $edit[0];

        return view('user.edit_company',compact('edit'));
    }
    public function edit_company_profile($id){
        $view = user::findOrFail($id);
        return view('company.edit_profile',compact('view'));
    }
    public function survey_form(Request $request){
        $department = $request->department_name;        
        return view('company.survey_form',compact('department'));
    }
    public function surveyReportCompany()
    {
        // 'painStressLevelAfter', 'moodMoraleLevelAfter', 'continuousWellness'
        
        // $views = DB::table('survey_datas')
        // ->selectRaw('*, (painStressLevelAfter+moodMoraleLevelAfter+continuousWellness)/15*100 AS performance')
        // ->where('user_id',Auth::user()->id)
        // ->get();

        $afters = DB::table('survey_datas')
        ->selectRaw('*, (painStressLevelAfter *20) AS painReduction, (moodMoraleLevelAfter)*20 AS moodMoraleIncrease')
        ->where('user_id',Auth::user()->id)
        ->get();
        return view('company.survey_report',compact('afters'));
    }
}
