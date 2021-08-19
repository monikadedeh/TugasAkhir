@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<section class="course-area section-gap" id="course">
    <div class="container">
        <div class="single-info row mt-40 align-items-center">
                <div class="col-md-4 col-12 float-left">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <img src="{{url('foto-admin/'. $editprofil->foto)}}" style="width:200px; height:200px;" alt="Photo" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-12 float-right">
                    <div class="card">
                            <div class="card-body">
                                <h3>Data Diri</h3>
                                <hr>
                                <form class="form form-horizontal" action="/profil/admin/simpan/{{$editprofil->id}}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="Nama" class="form-control"
                                                    name="nama_pustakawan" value="{{$editprofil->nama_pustakawan}}" placeholder="Masukan Nama Anda">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="jenis" id="jenis" class="form-control"
                                                    name="jenis_kelamin" value="{{$editprofil->jenis_kelamin}}" placeholder="Masukan Jenis Kelamin ">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="alamat" id="alamat" class="form-control"
                                                    name="alamat" value="{{$editprofil->alamat}}" placeholder="Masukan Alamat">
                                            </div>
                                            <div class="col-md-4">
                                                <label>No Telepon</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="no-telepon" id="no-telepon" class="form-control"
                                                    name="no_telepon" value="{{$editprofil->no_telepon}}" placeholder="Masukan No Telepon">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="email" id="Email" class="form-control"
                                                    name="email_perpusatkawaan" value="{{$editprofil->email_perpusatkawaan}}" placeholder="Masukan Email Anda">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Foto</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="file" id="No telepon" class="form-control"
                                                    name="foto" value="{{$editprofil->foto}}" placeholder="file">
                                                <input type="hidden" id="No telepon" class="form-control"
                                                    name="oldFoto" value="{{$editprofil->foto}}" placeholder="file">
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
        </div>
    </div>
</section>
@endsection
