@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($answerkey as $aw)
                    <a href="#">{{ $aw->soal }}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection