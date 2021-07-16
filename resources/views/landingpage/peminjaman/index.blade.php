@extends('landingpage.master')
@section('title', 'User Perpustakaan')

@section('content')
<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="single-info row mt-40 align-items-center">
            <div class="card col-12">
                <div class="card-body">
                    <h3>Form Peminjaman Buku</h3>
                    <hr>
                    <form action="{{route('peminjaman.landing.save', $id_buku)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id_buku" value="{{$id_buku}}">
                            <label for="exampleInputNama">Nama Peminjam</label>
                            @if (Session::get('is_user') == "1")
                                <input type="nama" disabled class="form-control" value="{{$akun->nama_siswa}}" id="nama" placeholder="Masukan nama peminjam">
                            @else
                                <input type="nama" disabled class="form-control" value="{{$akun->nama_guru}}" id="nama" placeholder="Masukan nama peminjam">
                            @endif
                          </div>
                          <div class="from-group">
                            <label for="exampleInputDurasi">Judul Buku</label>
                            <input type="text" class="form-control" name="" disabled value="{{$buku->nama_buku}}" id="">
                        </div>
                        <div class="from-group">
                            <label for="exampleInputDurasi">Durasi</label>
                        </div>
                        <div class="form-group">
                            <select name="durasi" class="form-control">
                                <Option value="3">3 Hari</Option>
                                <Option value="5">5 Hari</Option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</section>@endsection
