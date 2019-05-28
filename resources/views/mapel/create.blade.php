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
                        <h3><i class="fa fa-book"></i> Tambah Mata Pelajaran</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('mapel.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama_mapel">Nama Mata Pelajaran</label>
                                <input type="text" name="nama_mapel" class="form-control">
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