<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpsiJawaban extends Model
{
    protected $table = 'opsi_jawabans';
    protected $fillable = ['a','b','c','d','id_soal','id_mapel'];

    public function soal() {
        return $this->belongsTo('App\Soal', 'id_soal');
    }

    public function mapel() {
        return $this->belongsTo('App\Mapel', 'id_mapel');
    }
}
