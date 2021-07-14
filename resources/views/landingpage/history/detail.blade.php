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
                            <img class="img-fluid" src="{{url('assets/images/inggris.png')}}" alt="">
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
                                        </div>
                                        <div class="col-1">
                                            <p>: </p>
                                        </div>
                                        <div class="col-md-7 form-group">
                                            Bahasa Inggris
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Peminjaman</label>
                                        </div><div class="col-1">
                                            <p>: </p>
                                        </div>
                                        <div class="col-md-7 form-group">
                                            15 Juni 2021
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Pengembalian </label>
                                        </div>
                                        <div class="col-1">
                                            <p>:</p>
                                        </div>
                                        <div class="col-md-7 form-group">
                                            17 Juni 2021
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tahun </label>
                                        </div>
                                        <div class="col-1">
                                            <p>:</p>
                                        </div>
                                        <div class="col-md-7 form-group">
                                            2018
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kategori </label>
                                        </div>
                                        <div class="col-1">
                                            <p>:</p>
                                        </div>
                                        <div class="col-md-7 form-group">
                                            Fiksi
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
