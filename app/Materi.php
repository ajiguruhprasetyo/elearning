<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materis';
    protected $fillable = ['id_mapel', 'judul', 'body', 'file_pdf'];
}
