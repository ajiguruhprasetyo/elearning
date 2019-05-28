@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                    @if ($errors->any())
                    <div class="alert alert-danger  alert-block">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-success">
                        
                        <h3 class="text-white"><i class="fa fa-book"></i> Tambah Materi Pelajaran</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('materi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_mapel">Mata Pelajaran</label>
                                <select class="form-control" name="id_mapel">
                                    @foreach ($mapel as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_mapel }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="body">Isi Materi</label>
                                <input type="text" name="body" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="file_pdf">Upload PDF</label>
                                <input type="file" name="file_pdf" class="form-control">
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
@endsection