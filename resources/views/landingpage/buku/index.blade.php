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
        <div class="row mb-2">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Pilih Kategori</label>
                    <select name="kategori" id="" class="form-control">
                        <option value="">Semua Kategori</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-course-carusel">
                @foreach ($buku as $item)
                <div class="single-course item">
                    <img src="{{url('assets/images/mark.jpg')}} " class="img-fluid info-img" alt="" style="width: 300px; height:350px;">
                    <div class="details shadow">
                        <h4>{{$item->judul_buku}}</h4>
                        <p>{{$item->deskripsi}}</p>
                        <a href="{{route('user.buku.detail', $item->id)}}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
