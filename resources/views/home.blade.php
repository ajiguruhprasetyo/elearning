@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-muted"><i class="fa fa-graduation-cap"></i> PEMBELAJARAN ONLINE MATA PELAJARAN</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                            <div class="col-md-1">

                            </div>
                            <div class="card col-md-4 bg-success text-white">
                                    <span class="card-header text-center bg-blue">
                                        <i class="fa fa-book"></i>
                                        MATERI PELAJARAN
                                    </span>
                                    <a href="{{ route('materi.index') }}" class="card-body text-white">
                                        Baca Materi
                                    </a>
                                </div>
                                <div class="col-md-2"></div>
            
                                <div class="card col-md-4 bg-danger text-white">
                                    <span class="card-header text-center bg-blue">
                                        <i class="fa fa-list"></i>
                                        SOAL UJIAN
                                    </span>
                                    <a href="{{ route('soal.index') }}" class="card-body text-white">
                                        Mulai Mengerjakan
                                    </a>
                                </div>
                                <div class="col-md-1"></div>
                    </div>
                    
{{-- 
                    <div class="info-box">
                            <span class="info-box-icon bg-blue">
                                <i class="fa fa-user"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text"><b>Jumlah Karyawan</b></span>
                                <span class="info-box-number">{{ $karyawans}}</span>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
