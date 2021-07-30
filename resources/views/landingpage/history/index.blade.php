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
                <div class="single-testimonial item col-12">
                    <img class="img-fluid" src="{{url('foto-buku/' .$item->bukuRef->foto)}}" alt="" style="width: 300px; height:350px;">
                    <p>{{$item->bukuRef->nama_buku}}</p>
                    <p class="text-left">
                        Dipinjam Tanggal : {{$item->created_at->isoFormat('dddd, D MMMM Y')}}
                    </p>
                    <p class="text-left">
                        Dikembalikan Tanggal : {{\Carbon\Carbon::parse($item->tgl_selesai)->format('d, M Y')}}
                    </p>
                    {{-- <div class="col-">
                        Di Pinjam Pada Tanggal
                    </div>
                    <div class="col-1">
                        :
                    </div>
                    <div class="col-3">
                        {{$item->created_at}}
                    </div> --}}
                    {{-- <table class="col-12 mt-2 ">
                        <tr>
                            <td>
                                Di Pinjam Pada Tanggal :
                            </td>
                            <td>
                                {{$item->created_at}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Di Kembalikan Pada Tanggal :
                            </td>
                            <td>
                                {{$item->tgl_selesai}}
                            </td>
                        </tr>
                    </table> --}}
                    {{-- <table class="mt-2 ">
                        Di Kembalikan Pada Tanggal : {{$item->tgl_selesai}}
                    </table> --}}
                    <a href="{{route('landing.histori.detail',$item->kode_peminjaman)}}" class="btn btn-primary">Detail</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection

