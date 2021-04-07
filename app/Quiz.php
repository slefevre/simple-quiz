<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
    protected $table = 'quizzes';
    
    public static function answers() {
        return $this->hasMany('App\Answer');
    }
}
