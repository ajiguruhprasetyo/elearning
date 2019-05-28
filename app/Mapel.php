<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapels';
    protected $fillable = ['nama_mapel'];

    public function soal() {

        return $this->hasMany('App\Soal');
    }
}
