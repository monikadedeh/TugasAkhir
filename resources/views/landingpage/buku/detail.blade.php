@extends('landingpage.master')
@section('title', 'User Perpustakaan')

@section('content')
<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="single-info row mt-40 align-items-center">
            <div class="col-lg-6 col-md-12 text-center no-padding info-left">
                <div class="info-thumb">
                    <img src="{{url('foto-buku',$buku->foto)}} " class="img-fluid info-img" alt="" style="width: 200px; height:250px;">
                </div>
            </div>
            <div class="col-lg-6 col-md-10 no-padding info-rigth">
                <div class="info-content">
                    <h2 class="pb-30">{{$buku->nama_buku}}</h2>

                    <div class="row ">
                        <div class="col-md-3">
                            <h5>Penulis</h5>
                        </div>
                        <div class="col-md-3">
                            <p>{{$buku->penulis}}</p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-md-3">
                            <h5>Penerbit</h5>
                        </div>
                        <div class="col-md-6">
                            <p>{{$buku->penerbit}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <h5>Tahun </h5>
                        </div>
                        <div class="col-md-3">
                            <p>{{$buku->tahun}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <h5>Kategori</h5>
                        </div>
                        <div class="col-md-7 form-group">
                            <p>{{$buku->kategoriRef->nama_kategori}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <h5>Stok Buku</h5>
                        </div>
                        <div class="col-md-7 form-group">
                            <p>{{$buku->stok}}</p>
                        </div>
                    </div>

                    <div>
                        <h4 class="mb-2">Sinopsis / Deskripsi</h4>
                        <p >{{$buku->deskripsi}}</p>
                        <a href="{{route('peminjaman.landing.index', $buku->id)}}" class="btn btn-primary">Pinjam</a>
                    </div>
            </div>
        </div>
    </div>
</section>@endsection
