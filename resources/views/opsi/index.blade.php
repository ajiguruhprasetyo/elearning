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
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Data Soal</div>
                        
                            <a class="btn btn-outline btn-success btn-sm" href="{{ route('opsi.create') }}"><i class="fa fa-plus"></i> Tambah Soal</a>
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark text-white">
                                    <tr>
                                        <th>Id</th>
                                        <th>Soal</th>
                                        <th>Pilihan</th>
                                        <th>Jawaban</th>
                                        <th>Mapel</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($oj as $m)
                                    <tr>
                                        <td>{{ $m->id }}</td>
                                        <td>{{ $m->soal->soal }}</td>
                                        <td>a. {{ $m->a }} b. {{ $m->b }}</td>
                                        <td>c. {{ $m->c }} d. {{ $m->d }}</td>
                                        <td>{{ $m->mapel->nama_mapel }}</td>
                                        <td>
                                            
                                                <a onclick="return confirm('Apakah Anda ingin mengedit data ini ?')" class="btn btn-sm btn-secondary" href="{{ route('opsi.edit', $m->id) }}"><i class="fa fa-edit"></i> 
                                                    Edit
                                                </a>
                                            
                                                <form onclick="return confirm('Apakah anda ingin menghapus data ini ?')" action="{{ route('opsi.destroy', $m->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                                                </form>
                                           
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection