<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller
{
    public static function quiz() {
        return view('quiz', [
            'questions' => Questions::all(),
        ]); 
    }
}
