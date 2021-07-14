@extends('landingpage.master')
@section('title', 'User Perpustakaan')

@section('content')
<section class="course-area section-gap" id="course">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Daftar Buku </h1>



                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-course-carusel">
                <div class="single-course item">
                    <img src="{{url('assets/images/mark.jpg')}} " class="img-fluid info-img" alt="" style="width: 300px; height:350px;">
                    <div class="details">
                        <h4>Sebuah Seni Bersikap Bodo Amat</h4>
                        <p>
                            Sebuah Seni untuk Bersikap Bodo Amat: Pendekatan yang Waras Demi Menjalani Hidup yang Baik atau The Subtle Art of Not Giving a F*ck:
                            A Counterintuitive Approach to Living a Good Life adalah..............
                        </p>
                        <a href="{{url('user/kategori/detail')}}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
                <div class="single-course item">
                    <img class="img-fluid" src="{{url('assets/images/indonesia.png')}}" alt="" style="width: 300px; height:350px;">
                    <div class="details">
                        <h4>Baha Indonesia</h4>
                        <p>
                            Buku teks pelajaran Bahasa Indonesia ditulis dengan tujuan agar siswa
                            memiliki kompetensi berbahasa Indonesia untuk berbagai keperluan sebagai
                            kegiatan sosial....
                        </p>
                        <a href="{{url('user/kategori/detail')}}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
                <div class="single-course item">
                    <img class="img-fluid" src="{{url('assets/images/inggris.png')}}" alt="" style="width: 300px; height:350px;">
                    <div class="details">
                        <h4>Bahasa Inggris</h4>
                        <p>
                            Kurikulum 2013 dirancang untuk menyongsong model pembelajaran
                            Abad 21. Di dalamnya terdapat pergeseran pembelajaran dari siswa
                            diberi tahu menjadi siswa mencari tahu dari berbagai sumber belajar
                            melampaui batas pendidik dan satuan pendidikan.......
                        </p>
                        <a href="{{url('user/kategori/detail')}}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
