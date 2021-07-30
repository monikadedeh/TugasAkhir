@extends('landingpage.master')
@section('title', 'User Perpustakaan')

@section('content')
<section class="banner-area" id="home">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-7">
                <h1 class="text-uppercase">
                    Perpustakaan
                </h1>
                <p class="text-white pt-20 pb-20">
                    SMA NEGERI 1 LOSARANG
            </div>
            <div class="col-lg-5 banner-right">
                <img class="img-fluid" src="{{url('assets/user/landingpage/img/header-img.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="single-info row mt-40 align-items-center">
            <div class="col-lg-6 col-md-12 text-center no-padding info-left">
                <div class="info-thumb">
                    <img src="{{url('assets/images/logo.png')}} " class="img-fluid info-img" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-10 no-padding info-rigth">
                <div class="info-content">
                    <h2 class="pb-30"></h2>
                    <p>
                        VISI:
                    </p>
                    <p>
                        Menjadi Wahana untuk Menciptakan  Insan yang Berprestasi dalam Iptek, Berlandaskan Imtaq dan Budaya luhur, serta Peduli Lingkungan.
                    </p>

                    <br>
                    <p>
                        MISI:
                    </p>
                    <p>
                        <p> Mewujudkan dan mengembangkan KTSP Dokumen I.</p>
                        <p> Melaksanakan pembelajaran yang efektif dan </p>
                        <p> Mewujudkan perilaku warga sekolah yang berlandaskan norma agama. </p>
                        <p> Menyelenggarakan manajemen pendidikan berbasis sekolah.</p>
                        <p> Meningkatkan kompetensi dan profesional pendidik dan tenaga kependidikan. </p>
                        <p> Melaksanakan berbagai inovasi pembelajaran.</p>
                        <p> Melaksanakan pengembangan sarana dan prasana pembelajaran.</p>
                        <p> Melaksanakan peningkatan standar kelulusan. </p>
                        <p> Melaksanakan pengembangan mutu pendidikan dan manajemen. </p>
                        <p> Melaksanakan penggalangan pembiayaan pendidikan.</p>
                        <p> Melaksanakan Pengembangan penilaian kelas X, XI, dan XII untuk semua mata pelajaran. </p>
                        <p> Menciptakan lingkungan pendidikan yang nyaman dan kondusif.</p>
                    </p>
                </div>
            </div>
        </div>
      </div>
 </section>
 <section class="call-to-action-area section-gap">
    <div class="container">
        <div class="row justify-content-center top">
            <div class="col-lg-12">
                <h1 class="text-white text-center">Kritik dan Saran</h1>

                <div class="row">
                    <div class="active-tstimonial-carusel">
                        @foreach ($kritik as $item)
                        <div class="single-testimonial item">
                            <tbody>
                                <tr>
                                    <h4>Kritik</h4>
                                    <p class="desc">
                                        <td>{{$item->kritik}}</td>
                                    </p>
                                    <h4>Saran</h4>
                                    <p class="desc">
                                        <td>{{$item->saran}}</td>
                                    </p>
                                    <h4>Nama</h4>
                                    <p class="desc">
                                        <td>{{$item->nama_lengkap}}</td>
                                    </p>
                                </tr>
                            </tbody>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

