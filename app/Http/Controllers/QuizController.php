<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;
use App\Question;
use App\Answer;
use App\Quiz;

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

        // validate the responses
        $validator = Validator::make($request->all(), [
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
        
        // start a new quiz to store answers
        $quiz = new Quiz;
        $quiz->save();
        
        // check answers, prepare output for view
        $questions = Question::orderBy('sort')->get();
        $responses = $request->all();
        $answers = [];
        $score = ['total'=>0,'correct'=>0];

        foreach ( $questions as $i => $question ) {
          
            // store the answer in the db
            self::addAnswer($quiz, $question, $responses['question_' . $question->id] ); 
            
            // format answers for output
            
            // original question
            $answers[$i][] = '#' . ( $i + 1 ) . ' "' . $question['wording'] . '"';

            // their response
            $answers[$i][] = 'Your answer: "' . $responses['question_' . $question->id] . '"';
            
            // tally the total
            $score['total']++;

            if ( $question['answer'] != $responses['question_' . $question->id] ) {
            // they got it wrong
                $answers[$i][] = 'Incorrect'; 
                $answers[$i][] = 'The correct answer is "' . $question['answer'] . '"';
            }
            else {
            // they got it right
                $answers[$i][] = 'Correct!';
                $score['correct']++;
            }
        }
       
        return view('answers', [
            'answers' => $answers,
            'score' => $score,
        ]);
    }
    
    public static function addAnswer( Quiz $quiz, $question, $response ) {
        $answer = new Answer; 
        $answer->response = $response; 
        $answer->quiz_id = $quiz['id'];
        $answer->question_id = $question['id'];
        $answer->save();
    }
}
