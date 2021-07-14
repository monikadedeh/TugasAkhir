@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{route('buku.update', $editbuku->id)}}" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Judul Buku </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Nama" class="form-control"
                                            name="nama_buku" value="{{$editbuku->nama_buku}}" placeholder="Nama">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Penulis</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Email" class="form-control"
                                            name="penulis"  value="{{$editbuku->penulis}}" placeholder="Email">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Penerbit </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Alamat" class="form-control"
                                            name="penerbit"  value="{{$editbuku->penerbit}}" placeholder="Alamat">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Deskripsi </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="No telepon" class="form-control"
                                            name="deskripsi"  value="{{$editbuku->deskripsi}}" placeholder="No telepon">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Stok Buku </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Alamat" class="form-control"
                                            name="stok" value="{{$editbuku->stok}}" placeholder="Masukan Stok">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Kategori</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        @php
                                            $kategori = DB::table('kategori_buku')->get();
                                        @endphp
                                        <select name="kategori_id" class="form-control">
                                            <option value="{{$editbuku->kategoriRef->id}}" selected>{{$editbuku->kategoriRef->nama_kategori}} </option>
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
                                            name="tahun"  value="{{$editbuku->tahun}}" placeholder="No telepon">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Foto</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="file" id="No telepon" class="form-control"
                                            name="foto" value="{{$editbuku->foto}}" placeholder="file">
                                        <input type="hidden" id="No telepon" class="form-control"
                                            name="oldFoto" value="{{$editbuku->foto}}" placeholder="file">
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
