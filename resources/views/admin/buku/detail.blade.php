@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="row match-height">
        <div class="col-md-12 col-12 float-right">
            <a href="{{route('buku.index')}}" class="btn mx-auto btn-primary mb-3">Kembali</a>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Buku</h4>
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
                                        {{$buku->nama_buku}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Penulis </label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$buku->penulis}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Penerbit</label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$buku->penerbit}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Stok Buku</label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                       {{$buku->stok}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kategori </label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$buku->kategori_id}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tahun </label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$buku->tahun}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Deskripsi </label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$buku->deskripsi}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Foto Buku </label>
                                    </div><div class="col-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        {{$buku->foto}}
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
