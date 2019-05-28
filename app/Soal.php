<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table = 'soals';
    protected $fillable = ['title','a','b','c','d','e','id_mapel'];

    public function mapel() {
        return $this->belongsTo('App\Mapel', 'id_mapel');
    }

    public function answerkey() {
        return $this->hasOne('App\AnswerKey');
    }
}
