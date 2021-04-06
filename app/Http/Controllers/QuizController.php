<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuizController extends Controller
{
    /**
     * Present the quiz questions to the user
     */
    public static function quiz() {
        return view('quiz', [
            'questions' => Question::orderBy('sort')->get(),
        ]); 
    }
    
    /**
     * Show the user their score
     */
    public static function respond(Request $request) {
        return view('answers');
    }
}
