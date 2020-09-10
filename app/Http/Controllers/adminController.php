<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateAdminFormValidation;
use App\Http\Requests\adminFormValidation;
use App\Http\Requests\companyFormValidation;
use Illuminate\Http\Request;
use Auth;
use App\user;
use App\users_info;
use App\survey_data;
use App\graph_setting;
use Session;
use Hash;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
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
    
    public function redirect_user()
    {
    	if (auth::user()->role ==  '1') {
            return redirect('/admin/dashboard');
        }elseif (auth::user()->role == '2') {
            return redirect('/company/dashboard');
        }
        else{
            return 'try again';
        }
    }

    public function changePassword(Request $request){
        $vali = $request->validate([
            'old_password' => 'required',
            'password'     => 'required|min:6|confirmed',
            // 'password_confirmation' => 'required|confirmed',
        ]);

        if(!(Hash::check($request->get('old_password'), Auth::user()->password))){
            return back()->with('error','Your current password does not match');
        }
        elseif(strcmp($request->get('old_password'),$request->get('password'))== 0){
            return back()->with('error','Your current & new password can not be the same');
        }
        else{
            $user = Auth::user();
            $user->password = Hash::make($request->get('password'));
            $user->save();
        }
        return back()->with('success','Password changed successfully');

    }
    
    public function create_admin(adminFormValidation $request)
    {

        $store = new user;
        $store->name = $request->first_name;
        $store->last_name = $request->last_name;
        $store->email = $request->email;
        $store->mobile = $request->mobile;
        $pswd = $request->password;
        $store->password = Hash::make($pswd);
        $store->role = '1';
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $path = $request->file('avatar')->storeAs(
                'public/admins', time().".".$request->file('avatar')->extension()
            );
    
            $path = str_replace("public", "storage", $path);
    
            $store->avatar = $path;
    
            $store->save();
        }
        $store->save();
        Session::flash('success','User has been added successfully');
        return redirect('/admin/create/user');
    }
    public function create_company_by_admin(companyFormValidation $request)
    {
        $store = new user;
        $store->name = $request->first_name;
        $store->last_name = $request->last_name;
        $store->email = $request->email;
        $store->mobile = $request->mobile;
        $pswd = $request->password;
        $store->password = Hash::make($pswd);
        $store->role = '2';

        if($request->hasFile('avatar')){
            $path = $request->file('avatar')->storeAs(
                'public/companies', time().".".$request->file('avatar')->extension()
            );
    
            $path = str_replace("public", "storage", $path);
    
            $store->avatar = $path;
            $store->save();
        }
        $store->save();

        $user_id = $store->id;
        $auth_id = auth::user()->role;

        $store2 = new users_info;
        $store2->user_id = $user_id;
        $store2->rel_id = $auth_id;
        $store2->company_name = $request->company_name;
        $store2->company_location = $request->company_location;
        $store2->save();

        $store = new graph_setting();
        $store->user_id = $user_id;
        $store->value = '7';
        $store->save();
        
        session()->flash('create_company','Company has been created successfully');
        return redirect(route('company_index_by_admin')); 
    }
     public function update_admin_by_admin(Request $request,$id)
    {
        $update = user::find($id);
        $update->name = $request->first_name;
        $update->last_name = $request->last_name;
        $update->email = $request->email;
        $update->mobile = $request->mobile;
        $update->role = '1';

        if($request->hasFile('avatar')){
            $path = $request->file('avatar')->storeAs(
                'public/admins', time().".".$request->file('avatar')->extension()
            );
    
            $path = str_replace("public", "storage", $path);
    
            $update->avatar = $path;
            $update->save();
        }
        $update->save();
        session()->flash('update_user','User has been UPDATED successfully');
        return redirect('/admin/create/user');
    }

    public function update_admin_profile(Request $request, $id){
        $update = user::find($id);
        $update->name = $request->first_name;
        $update->last_name = $request->last_name;
        $update->email = $request->email;
        $update->mobile = $request->mobile;
        
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $path = $request->file('avatar')->storeAs(
                'public/admins', time().".".$request->file('avatar')->extension()
            );
    
            $path = str_replace("public", "storage", $path);
            $update->avatar = $path;
    
            $update->save();
        }
        $update->save();
        session()->flash('update_admin_self_profile','Your profile has been UPDATED successfully');
        return redirect('/admin/dashboard');
    }
    public function update_compnay_by_admin(Request $request,$id){
        $update = user::find($id);
        $update->name = $request->first_name;
        $update->last_name = $request->last_name;
        $update->email = $request->email;
        $update->mobile = $request->mobile;
        if($request->hasFile('avatar')){
            $path = $request->file('avatar')->storeAs(
                'public/admins', time().".".$request->file('avatar')->extension()
            );
    
            $path = str_replace("public", "storage", $path);
    
            $update->avatar = $path;
            $update->save();
        }
        $update->save();
        $update = users_info::where('user_id','=',$id)->first();
        $update->company_name = $request->company_name;
        $update->company_location = $request->company_location;
        $update->save();
        session()->flash('update_company','Company has been UPDATED successfully');
        return redirect('/admin/create/company');

    }
    public function update_company_profile(Request $request, $id){
        $update = user::find($id);
        $update->name = $request->first_name;
        $update->last_name = $request->last_name;
        $update->email = $request->email;
        $update->mobile = $request->mobile;
        if($request->hasFile('avatar')){
            $path = $request->file('avatar')->storeAs(
                'public/companies', time().".".$request->file('avatar')->extension()
            );
    
            $path = str_replace("public", "storage", $path);
            $update->avatar = $path;
            $update->save();
        }
        $update->save();

        session()->flash('update_company_profile','Your profile has been UPDATED successfully');
        return redirect('/company/dashboard');
    }
    public function companySettings($id)
    {
        return view('company.settings');
    }

    public function delete_admin_by_admin(Request $request, $id){
        $dell = user::find($id);
        $dell->delete();
        return back();
    }

    public function delete_company_by_admin(Request $request, $id)
    {
        $dell = user::find($id);
        $dell->delete();
        //Delete from Users Ino Table
        $dell = users_info::where('user_id','=',$id);
        $dell->delete();
        return back();

    }

    public function saveReview(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'comments' => 'required',
            'painStressLevelBefore' => 'required',
            'painStressLevelAfter' => 'required',
            'moodMoraleLevelBefore' => 'required',
            'moodMoraleLevelAfter' => 'required',
            'continuousWellness' => 'required',

            
        ],
        [
            'comments.required' => 'Please enter comments!',
            'painStressLevelBefore.required' => 'Please specify pain stress level before!',
            'painStressLevelAfter.required' => 'Please specify pain stress level after!',
            'moodMoraleLevelBefore.required' => 'Please specify mood morale before!',
            'moodMoraleLevelAfter.required' => 'Please specify mood morale after!',
            'continuousWellness.required' => 'Please specify continuous wellness!',

        ]);

        if ($validatedData->fails())
        {
            return response()->json(array(
                'success' => false,
                'errors' => $validatedData->errors()->first()
            ), 219); 
        }

        $store = new survey_data;
        $user_id = auth::user()->id;
        $store->user_id = $user_id;
        $store->department_name = $request->department_name;
        $store->comments = $request->comments;
        $store->painStressLevelBefore = $request->painStressLevelBefore;
        $store->painStressLevelAfter = $request->painStressLevelAfter;
        $store->moodMoraleLevelBefore = $request->moodMoraleLevelBefore;
        $store->moodMoraleLevelAfter = $request->moodMoraleLevelAfter;
        $store->continuousWellness = $request->continuousWellness;
        $store->save();
    }
    
}
