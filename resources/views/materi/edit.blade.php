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
                        <h3><i class="fa fa-book"></i> Edit Materi Pelajaran</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('materi.update', $materi->id ) }}" method="POST">
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                    <label for="id_mapel">Mata Pelajaran</label>
                                    <select class="form-control" name="id_mapel">
                                        @foreach ($mapel as $item)
                                            <option value="{{ $item->id }}" @if ($materi->id_mapel === $item->id) selected='selected' @endif>{{ $item->nama_mapel }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_mapel">Judul</label>
                                    <input type="text" value="{{ $materi->judul }}" name="judul" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama_mapel">Isi Materi</label>
                                    <input type="text" value="{{ $materi->body }}" name="body" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama_mapel">Upload PDF</label>
                                    <input type="file" value="{{ $materi->file_pdf }}" name="file_pdf" placeholder="silahkan">
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