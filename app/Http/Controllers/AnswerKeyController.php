<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AnswerKey;

class AnswerKeyController extends Controller
{
    
    public function index() {

        $answerkey = DB::table('soals')
                            ->join('answer_keys', 'soals.id', '=', 'answer_keys.id_soal')
                            ->select('soals.title as soal', 'answer_keys.answer_key as jawaban')
                            ->distinct('soal')->get();
        
        return view('answerkeys.index', compact('answerkey'));
    }

}
