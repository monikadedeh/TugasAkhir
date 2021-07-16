@extends('landingpage.master')
@section('title', 'User Perpustakaan')
@section('content')
<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="single-info row mt-40 align-items-center">
            <div class="col-lg-6 col-md-12 text-center no-padding info-left">
                <div class="card-body">
                    <img src="{{url('foto-guru/'. $editpw->foto)}}" style="width:200px; height:200px;" alt="Photo" srcset="">
                </div>
            </div>
            <div class="col-lg-6 col-md-10 no-padding info-rigth">
                @if (session()->has('editpw'))
                    <div class="alert alert-success">
                        {{ Session::get('editpw') }}
                    </div>
                    @elseif(session()->has('failedpw'))
                        <div class="alert alert-danger">
                            {{ Session::get('failedpw') }}
                        </div>
                @endif
                <div class="info-content">
                    <form class="form form-horizontal" action="{{route('user.guru.simpan.password', $editpw->id)}}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Password Baru</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="password" id="Nama" class="form-control"
                                        name="newPassword" placeholder="Masukan password baru">
                                </div>
                                <div class="col-md-4">
                                    <label>Konfirmasi Password</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="password" id="Email" class="form-control"
                                        name="confirmPassword" placeholder="Masukan konfimasi password">
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
</section>
@endsection
