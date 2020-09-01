<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\survey_data;
use Auth;
use Carbon\Carbon;

class companyGraphController extends Controller
{
    public function pain_stress_level_before()
    {
        $graph = survey_data::all();
        $count = survey_data::where('user_id',Auth::user()->id)
        ->get()
        ->count();
        $sum = survey_data::where('user_id',Auth::user()->id)
        ->get()
        ->sum('painStressLevelBefore');
        if($count > 0){
            $average = $sum / $count;
            return ['count' => $count, 'average' => $average];
        }else{
            return ['count' => 'N/A ', 'average' => 'N/A '];

        }

    }
    public function pain_stress_level_after()
    {
        $graph = survey_data::all();
        $count = survey_data::where('user_id',Auth::user()->id)
        ->get()
        ->count();
        $sum = survey_data::where('user_id',Auth::user()->id)
        ->get()
        ->sum('painStressLevelAfter');
        if($count > 0){
            $average = $sum / $count;
            return $average;

        }else{
            return $average = 'N/A ';
        }
    }
    public function count_pain_stress_level_before()
    {
        $count = survey_data::count();

    }
    public function count_pain_stress_level_after()
    {
        $count = survey_data::count();

    }
    public function mood_morale()
    {
        $before = [];
        $after  = [];
        $dates  = [];

        $date = Carbon::now();
        $sevenDaysEarlier = Carbon::now()->subDays(7);

        $datas = survey_data::where('user_id',Auth::user()->id)
        ->whereBetween('created_at', [$sevenDaysEarlier,$date])
        ->get();

        foreach ($datas as $key => $data){
            array_push($dates, $data->created_at->diffForHumans());
            array_push($before, $data->moodMoraleLevelBefore);
            array_push($after, $data->moodMoraleLevelAfter);
        }

        return ['dates' => $dates, 'before' => $before, 'after' => $after];
    }
}
