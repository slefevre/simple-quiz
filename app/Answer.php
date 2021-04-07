<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';

    public static function question() {
        return $this->belongsToOne('App\Question');
    }
    
    public static function quiz() { 
        return $this->belongsToOne('App\Quiz');
    }
}
