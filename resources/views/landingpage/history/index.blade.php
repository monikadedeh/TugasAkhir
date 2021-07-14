@extends('landingpage.master')
@section('title', 'User Perpustakaan')

@section('content')
<section class="testomial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">What our Reader’s Say about us</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-tstimonial-carusel">
                <div class="single-testimonial item">
                    <img class="img-fluid" src="{{url('assets/images/inggris.png')}}" alt="">
                    <p class="mt-2 ">
                        Di Pinjam Pada Tanggal : 15 Juni 2021
                    </p>
                    <p class="">
                        Di Kembalikan Pada Tanggal : 17Juni 2021
                    </p>
                    <a href="{{url('peminjamanuser/index')}}" class="btn btn-primary">Detail</a>
                </div>
                <div class="single-testimonial item">
                    <img class="img-fluid" src="{{url('assets/images/indonesia.png')}}" alt="">
                    <p class="mt-2">
                        Di Pinjam Pada Tanggal : 21 Juni 2021
                    </p>
                    <p class="">
                        Di Kembalikan Pada Tanggal :23 Juni 2021
                    </p>
                    <a href="{{url('peminjamanuser/index')}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

