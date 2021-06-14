<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\Questionnaire;
use App\Models\Result;

class EvaluationController extends Controller
{
    function view_evaluation(){
        return view('competencies.add_competency');

    }
}
