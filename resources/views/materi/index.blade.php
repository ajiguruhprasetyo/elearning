@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
            <h2 class="text-dark">Data Materi Pelajaran</h2>
            <a class="btn btn-sm btn-info" href="{{ route('materi.create') }}"> <i class="fa fa-plus"></i> Tambah Materi</a>
            <hr>
                @foreach ($materi as $item)
                    <div class="card">
                        <div class="card-header bg-success">
                            <div class="card-title"><h2 class="text-white"><i class="fa fa-book"></i> {{ $item->asu}}</h2></div>
                                    {{-- @permission('mapel-create')
                                        <a class="btn btn-outline btn-success btn-sm" href="{{ route('mapel.create') }}"><i class="fa fa-plus"></i> Tambah Mapel</a>
                                    @endpermission --}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="card-text">{{ $item->body }}</p>
                            <a class="card-link" href="#">Download Materi PDF</a>
                            <a class="card-link" href="{{ route('materi.edit', $item->id) }}">Edit</a>
                            <form onclick="return confirm('Apakah anda ingin menghapus data ini?')" action="{{ route('materi.destroy', $item->id) }}" method="post" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                            </form>
                        </div>   
                    </div>
                    <br>
                @endforeach  
        </div>
    </div>
</div>

@endsection