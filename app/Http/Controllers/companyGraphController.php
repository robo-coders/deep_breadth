<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\survey_data;
class companyGraphController extends Controller
{
    public function pain_stress_level_before()
    {
        $graph = survey_data::all();
        $count = survey_data::count();
        $sum = survey_data::sum('painStressLevelBefore');
        $average = $sum / $count;
        return ['count' => $count, 'average' => $average];
    }
    public function pain_stress_level_after()
    {
        $graph = survey_data::all();
        $count = survey_data::count();
        $sum = survey_data::sum('painStressLevelAfter');
        $average = $sum / $count;
        return $average;
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
        $graph = survey_data::all();
        $count = survey_data::count();

        $sum = survey_data::sum('moodMoraleLevelBefore');
        $before = $sum / $count;

        $sumAfter = survey_data::sum('moodMoraleLevelAfter');
        $after = $sumAfter / $count;
        
        return ['before' => $before, 'after' => $after];
    }
}
