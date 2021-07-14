@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{route('buku.simpandata')}}" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Judul Buku</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Nama" class="form-control"
                                            name="nama_buku" placeholder="Masukan  Nama">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Penulis</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="penulsi" class="form-control"
                                            name="penulis" placeholder="Masukan Penulis">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Penerbit </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="text" class="form-control"
                                            name="penerbit" placeholder="Masukan Penerbit">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Deskripsi </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Alamat" class="form-control"
                                            name="deskripsi" placeholder="Masukan Deskripsi">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Stok Buku </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Alamat" class="form-control"
                                            name="stok" placeholder="Masukan Stok">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kategori </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        @php
                                            $kategori = DB::table('kategori_buku')->get();
                                        @endphp
                                    <select name="kategori_id" class="form-control">
                                        <option selected> Pilih Kategori</option>
                                        @foreach ( $kategori as $item )
                                            <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tahun </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="No telepon" class="form-control"
                                            name="tahun" placeholder="Masukan Tahun">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Foto</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="file" id="No telepon" class="form-control"
                                            name="foto" placeholder="file">
                                    </div>
                                    <div class="col-12 col-md-8 offset-md-4 form-group">
                                        <div class='form-check'>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
