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
    function index()
    {
        return $this->graphDays = Auth::user()->graph_setting
        ->first()
        ->value;
    }
    public function updateGraph(Request $request)
    {
        $data = Auth::user()->graph_setting
        ->first();
        $data->value = $request->value;
        $data->save();
        return $data;
    }
    public function pain_stress_level_before()
    {
        $graphDays = Auth::user()->graph_setting
        ->first()
        ->value;
        
        $date = Carbon::now();
        $sevenDaysEarlier = Carbon::now()->subDays($graphDays);

        $graph = survey_data::where('user_id',Auth::user()->id)
        ->whereBetween('created_at', [$sevenDaysEarlier,$date])
        ->get();

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
            $average = round($count * 5 / $average);

            return ['count' => $count, 'average' => $average];
        }else{
            return ['count' => 'N/A ', 'average' => 'N/A '];

        }

    }
    public function pain_stress_level_after()
    {
        $graphDays = Auth::user()->graph_setting
        ->first()
        ->value;

        $date = Carbon::now();
        $sevenDaysEarlier = Carbon::now()->subDays($graphDays);

        $graph = survey_data::where('user_id',Auth::user()->id)
        ->whereBetween('created_at', [$sevenDaysEarlier,$date])
        ->get();
        
        $count = survey_data::where('user_id',Auth::user()->id)
        ->whereBetween('created_at', [$sevenDaysEarlier,$date])
        ->get()
        ->count();
        $sum = survey_data::where('user_id',Auth::user()->id)
        ->whereBetween('created_at', [$sevenDaysEarlier,$date])
        ->get()
        ->sum('painStressLevelAfter');
        if($count > 0){
            // $average = $sum / $count * 5;
            $average = $sum / $count;
            $average = round($count * 5 / $average);
            return $average;

        }else{
            return $average = 'N/A ';
        }
    }
    public function deleteSurvey(Request $request, $id)
    {
        $dell = survey_data::find($id);
        $dell->delete();
        return back();
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
        $graphDays = Auth::user()->graph_setting
        ->first()
        ->value;

        $before = [];
        $after  = [];
        $dates  = [];

        $date = Carbon::now();
        $sevenDaysEarlier = Carbon::now()->subDays($graphDays);

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
        $graphDays = Auth::user()->graph_setting
        ->first()
        ->value;

        $response         = [];
        $dayNames         = [];
        $submissionsCount = [];
        for ($i=1; $i <= $graphDays; $i++) { 
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
        $graphDays = Auth::user()->graph_setting
        ->first()
        ->value;

        $report = [];

        $stronglyDisagree = Auth::user()->survey_data()
        ->where('continuousWellness','1')
        ->pluck('continuousWellness')->sum();

        $disagree = Auth::user()->survey_data()
        ->where('continuousWellness','2')
        ->pluck('continuousWellness')->sum();

        $neutral = Auth::user()->survey_data()
        ->where('continuousWellness','3')
        ->pluck('continuousWellness')->sum();

        $agree = Auth::user()->survey_data()
        ->where('continuousWellness','4')
        ->pluck('continuousWellness')->sum();

        $stronglyAgree = Auth::user()->survey_data()
        ->where('continuousWellness','5')
        ->pluck('continuousWellness')->sum();


        // return [
        //         'stronglyDisagree' => $stronglyDisagree, 
        //         'disagree' => $disagree,
        //         'neutral' => $neutral,
        //         'agree' => $agree,
        //         'stronglyAgree' => $stronglyAgree
        //     ];

        array_push($report, $stronglyDisagree, $disagree, $neutral, $agree, $stronglyAgree);
        return $report;
        
        // return ['report' => [
        //     1,
        //     2,
        //     3,
        //     4,
        //     5
        // ]];
    }
}
