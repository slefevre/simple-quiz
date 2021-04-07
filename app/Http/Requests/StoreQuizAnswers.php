<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuizAnswers extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE; 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'question_1' => 'required', 
           'question_2' => 'required', 
           'question_3' => 'required', 
           'question_4' => 'required', 
           'question_5' => 'required', 
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() {
	
        return [
           'question_1.required' => 'Please answer question #1', 
           'question_2.required' => 'Please answer question #2', 
           'question_3.required' => 'Please answer question #3', 
           'question_4.required' => 'Please answer question #4', 
           'question_5.required' => 'Please answer question #5', 
        ];
    
    }
}
