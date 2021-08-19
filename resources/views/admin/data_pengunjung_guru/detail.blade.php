@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="row match-height">
        <div class="col-md-12 col-12 float-right">
            <a href="{{route('admin.pengunjung.guru.index')}}" class="btn mx-auto btn-primary mb-3">Kembali</a>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Pengunjung Guru</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama </label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$gurudetail->nama_lengkap}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kegiatan </label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$gurudetail->kegiatan}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
