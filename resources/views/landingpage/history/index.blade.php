@extends('landingpage.master')
@section('title', 'User Perpustakaan')

@section('content')
<section class="testomial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Daftar History Peminjaman Buku </h1>
                    <p>Perpustakaan SMA Negeri 1 Losarang</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-tstimonial-carusel">
                @foreach ($histori as $item)
                <div class="single-testimonial item">
                    <img class="img-fluid" src="{{url('foto-buku/' .$item->bukuRef->foto)}}" alt="" style="width: 300px; height:350px;">
                    <p>{{$item->bukuRef->nama_buku}}</p>
                    <table class="mt-2 ">
                        Di Pinjam Pada Tanggal : {{$item->created_at}}
                    </table>
                    <table class="mt-2 ">
                        Di Kembalikan Pada Tanggal : {{$item->tgl_selesai}}
                    </table>
                    <a href="{{route('landing.histori.detail',$item->kode_peminjaman)}}" class="btn btn-primary">Detail</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection

