@extends('landingpage.master')
@section('title', 'User Perpustakaan')

@section('content')
<section class="testomial-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-md-4 float-left">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <img src="{{url('foto-buku/' .$histori->bukuRef->foto)}} " class="img-fluid info-img" alt="" style="width: 200px; height:250px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 float-left">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                        <h3 class="card-title">Detail Peminjaman Buku</h3>
                        <hr>
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Judul Buku </label>
                                        </div><div class="col-1">
                                            <p>:</p>
                                        </div>
                                        <div class="col-md-7 form-group">
                                            <p>{{$histori->bukuRef->nama_buku}}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Peminjaman</label>
                                        </div><div class="col-1">
                                            <p>: </p>
                                        </div>
                                        <div class="col-md-7 form-group">
                                            <p>{{$histori->created_at}}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Pengembalian </label>
                                        </div>
                                        <div class="col-1">
                                            <p>:</p>
                                        </div>
                                        <div class="col-md-7 form-group">
                                            <p>{{$histori->tgl_selesai}}</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
