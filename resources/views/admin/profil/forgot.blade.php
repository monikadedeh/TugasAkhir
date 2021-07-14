@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="row match-height">
        @if (session()->has('editpw'))
        <div class="alert alert-success">
            {{ Session::get('editpw') }}
        </div>
        @elseif(session()->has('failedpw'))
            <div class="alert alert-danger">
                {{ Session::get('failedpw') }}
            </div>
        @endif
        <div class="col-md-4 col-12 float-left">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <img src="{{url('assets/images/logo.png')}}" style="width:200px; height:200px;" alt="Photo" srcset="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-12 float-right">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ganti Password</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{route('admin.simpan.password', $editpw->id)}}" method="post" enctype="multipart/form-data">
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
</div>
@endsection
