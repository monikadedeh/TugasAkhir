@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="row match-height">
        <div class="col-md-12 col-12 float-right">
            <a href="{{route('peminjaman.guru.index')}}" class="btn mx-auto btn-primary mb-3">Kembali</a>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Peminjaman Guru</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Judul Buku </label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$detail->bukuRef->nama_buku}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nama Guru</label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$detail->guruRef->nama_guru}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kode Peminjaman</label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$detail->kode_peminjaman}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal Pinjam</label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$detail->created_at->isoFormat('dddd, D MMMM Y')}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Durasi</label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$detail->durasi}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Status</label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$detail->status}}
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
