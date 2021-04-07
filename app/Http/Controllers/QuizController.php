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

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'question_1' => 'required',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'required',
            'question_5' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        return view('answers');
    }
}
