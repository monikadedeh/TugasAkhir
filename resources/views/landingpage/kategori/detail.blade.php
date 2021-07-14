@extends('landingpage.master')
@section('title', 'User Perpustakaan')

@section('content')
<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="single-info row mt-40 align-items-center">
            <div class="col-lg-6 col-md-12 text-center no-padding info-left">
                <div class="info-thumb">
                    <img src="{{url('assets/images/mark.jpg')}} " class="img-fluid info-img" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-10 no-padding info-rigth">
                <div class="info-content">
                    <h2 class="pb-30">Sebuah Seni Bersikap Bodo Amat</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Tahun </h5>
                        </div>
                        <div class="col-md-3">
                            <p>2016</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-3">
                            <h5>Penerbit</h5>
                        </div>
                        <div class="col-md-3">
                            <p>-</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-3">
                            <h5>Penulis</h5>
                        </div>
                        <div class="col-md-3">
                            <p>Mark Mason</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Kategori</h5>
                        </div>
                        <div class="col-md-7 form-group">
                            <p>Non Fiksi</p>
                        </div>
                    </div>
                    <h4 class="mb-2">Sinopsis</h4>
                    <p>
                        Sebuah Seni untuk Bersikap Bodo Amat: Pendekatan yang Waras Demi Menjalani Hidup yang Baik atau The Subtle Art of Not Giving a F*ck:
                        A Counterintuitive Approach to Living a Good Life adalah buku tentang menemukan makna dalam hal-hal penting dalam hidup dan hanya memiliki nilai-nilai yang dapat dikendalikan oleh individu.
                        Apapun nilai (seperti popularitas) yang tidak berada di bawah kendali seseorang, adalah nilai yang buruk untuk dimiliki dan seseorang harus berusaha untuk menggantinya dengan sesuatu yang lebih bisa dikendalikan seperti ketepatan waktu, kejujuran, atau kebaikan.
                    </p>
                    <a href="{{url('peminjaman/user/index')}}" class="btn btn-primary">Pinjam</a>
                    </div>
            </div>
        </div>
    </div>
</section>@endsection
