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
                        <h3><i class="fa fa-book"></i> Tambah Master Soal</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('soal.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Pertanyaan</label>
                                <textarea name="title" id="title" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="mapel">Opsi Jawaban A</label>
                                <input type="text" name="a" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mapel">Opsi Jawaban B</label>
                                <input type="text" name="b" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mapel">Opsi Jawaban C</label>
                                <input type="text" name="c" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mapel">Opsi Jawaban D</label>
                                <input type="text" name="d" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mapel">Opsi Jawaban E</label>
                                <input type="text" name="e" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mapel">Mapel</label>
                                <select name="id_mapel" class="form-control">
                                    @foreach($mapels as $map)
                                        <option value="{{ $map->id }}">{{ $map->nama_mapel }}</option>
                                    @endforeach
                                </select>
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