@extends('landingpage.master')
@section('title', 'User Perpustakaan')

@section('content')
<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="single-info row mt-40 align-items-center">
            <div class="card col-12">
                <ul class="nav nav-pills mt-5">
                    <li class="active"><a class="nav-link active" data-toggle="tab" aria-current="page" href="#siswa">Siswa</a></li>
                    <li><a class="nav-link" data-toggle="tab" aria-current="page" href="#menu1">Guru</a></li>
                </ul>
                <div class="tab-content mt-5 mb-5">
                    <div id="siswa" class="tab-pane active mb-5">
                        <h3>Form Pengujung Siswa</h3>
                        <form class="form form-horizontal" action="{{route('user.pengujung.siswa.simpan')}}" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputNama">Nama Lengkap</label>
                                <input type="nama" name="nama_lengkap" class="form-control" id="nama" placeholder="Masukan nama lengkap">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama">Kelas</label>
                                <input type="nama" name="kelas" class="form-control" id="nama" placeholder="Masukan nama kelas anda">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <select name="kegiatan"class="form-control">
                                        <Option value="pilih"> Pilih Kegiatan</Option>
                                        <option value="membaca">Membaca</option>
                                        <option value="pinjam">Pinjam</option>
                                      </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </form>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Guru</h3>
                        <form class="form form-horizontal" action="{{route('user.pengujung.simpan')}}" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputNama">Nama Lengkap</label>
                                <input type="nama" name="nama_lengkap" class="form-control" id="nama" placeholder="Masukan nama lengkap">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <select name="kegiatan"class="form-control">
                                        <Option value="pilih"> Pilih Kegiatan</Option>
                                        <option value="membaca">Membaca</option>
                                        <option value="pinjam">Pinjam</option>
                                      </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>@endsection
