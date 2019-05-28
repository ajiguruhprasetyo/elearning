<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerKey extends Model
{
    
    public function soal() {
        return $this->belongsTo('App\Soal', 'id_soal');
    }
}
