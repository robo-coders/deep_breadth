<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\survey_data;
use App\graph_setting;
use Auth;
use Carbon\Carbon;

class companyGraphController extends Controller
{
    private $graphDays;
    
    public function updateGraph()
    {
        $data = Auth::user()->graph_setting
        ->first();
        $data->value = '7';
        $data->save();
    }
    public function pain_stress_level_before()
    {
        $graph = survey_data::all();

        $date = Carbon::now();
        $sevenDaysEarlier = Carbon::now()->subDays(7);

        $count = survey_data::where('user_id',Auth::user()->id)
        ->whereBetween('created_at', [$sevenDaysEarlier,$date])
        ->get()
        ->count();
        $sum = survey_data::where('user_id',Auth::user()->id)
        ->whereBetween('created_at', [$sevenDaysEarlier,$date])
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
        $date = Carbon::now();
        $sevenDaysEarlier = Carbon::now()->subDays(7);

        $count = survey_data::where('user_id',Auth::user()->id)
        ->whereBetween('created_at', [$sevenDaysEarlier,$date])
        ->get()
        ->count();
        $sum = survey_data::where('user_id',Auth::user()->id)
        ->whereBetween('created_at', [$sevenDaysEarlier,$date])
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
    public function submitSurveyReport()
    {
        $response         = [];
        $dayNames         = [];
        $submissionsCount = [];
        for ($i=1; $i <= 7; $i++) { 
            $date  = Carbon::now()->subDays($i);
            $count = Auth::user()->survey_data()->whereDate("created_at", $date)->count();
            array_push($dayNames, $count);
            array_push($submissionsCount, $date->format('l'));
        }

        array_push($response, $dayNames, $submissionsCount);
        return $response;
        
        $week = Auth::user()->survey_data()
        ->whereBetween('created_at', [$sevenDaysEarlier, $date])->get();
        
        return ['week' =>$week];
    }
    public function continuousWellness()
    {
        $report = survey_data::where('user_id',Auth::user()->id)
        ->pluck('continuousWellness');

        // return ['report' =>$report];

        return ['report' => [
            4,
            1,
            3,
            2,
            5
        ]];
    }
}
