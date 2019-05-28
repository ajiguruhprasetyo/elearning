@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <p>{{ $message }}</p>
                    </div>
                @elseif($message = Session::get('danger'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" data-dismiss="alert" class="close">x</button>
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @foreach ($soal as $m)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <div class="card-title text-white">Soal Mata Pelajaran</div>   
                        </div>
                        <div class="card-body"> 
                            <h4>{{ $m->mapel }}</h4>
                            <a href="">Mengerjakan Soal</a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    
@endsection