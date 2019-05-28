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
                        <h3><i class="fa fa-book"></i> Tambah Soal</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('opsi.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="id_soal">Mata Pelajaran</label>
                                <select name="id_mapel" class="form-control">
                                    @foreach ($mapel as $m) 
                                        <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>    
                                    @endforeach
                                </select> 
                            </div>
                            <div class="form-group">
                                <label for="id_soal">Soal</label>
                                    <select name="id_soal" class="form-control">
                                        @foreach ($soal as $s)
                                            <option value="{{ $s->id }}">{{ $s->soal }}</option>    
                                        @endforeach
                                    </select> 
                            </div>
                            <div class="form-group">
                                <label for="a">A</label>
                                <input type="text" name="a" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="b">B</label>
                                <input type="text" name="b" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="c">C</label>
                                <input type="text" name="c" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="d">D</label>
                                <input type="text" name="d" class="form-control">
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