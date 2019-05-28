@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        @if ($errors->any())
                            <div class="alert alert-danger  alert-block">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h3><i class="fa fa-book"></i> Edit Soal Pelajaran</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('opsi.update', $opsi->id ) }}" method="POST">
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                    <label for="id_soal">Mata Pelajaran</label>
                                    <select name="id_mapel" class="form-control">
                                        @foreach ($mapel as $m) 
                                            <option value="{{ $m->id }}" @if ($opsi->id_mapel === $m->id) selected='selected' @endif >{{ $m->nama_mapel }}</option>    
                                        @endforeach
                                    </select> 
                                </div>
                                <div class="form-group">
                                    <label for="id_soal">Soal</label>
                                        <select name="id_soal" class="form-control">
                                            @foreach ($soal as $s)
                                                <option value="{{ $s->id }}" @if ($opsi->id_soal === $s->id) selected='selected' @endif >{{ $s->soal }}</option>    
                                            @endforeach
                                        </select> 
                                </div>
                                <div class="form-group">
                                    <label for="a">A</label>
                                    <input type="text" name="a" value="{{ $opsi->a }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="b">B</label>
                                    <input type="text" name="b" value="{{ $opsi->b }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="c">C</label>
                                    <input type="text" name="c" value="{{ $opsi->c }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="d">D</label>
                                    <input type="text" name="d" value="{{ $opsi->d }}" class="form-control">
                                </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-save"></i> Simpan</button>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop