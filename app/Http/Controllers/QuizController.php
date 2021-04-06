<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuizController extends Controller
{
    public static function quiz() {
        return view('quiz', [
            'questions' => Question::orderBy('sort')->get(),
        ]); 
    }
    
    public static function response(Request $request) {
        return view('answers');
    }
}
