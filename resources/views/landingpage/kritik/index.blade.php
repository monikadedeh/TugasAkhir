@extends('landingpage.master')
@section('title', 'User Perpustakaan')

@section('content')
<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="single-info row mt-40 align-items-center">
            <div class="card col-12">
                <div class="card-body">
                    <h3>Form Kritik & Saran</h3>
                    <hr>
                    <form class="form form-horizontal" action="{{url('user/kritik/simpan')}}" method="post" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputNama">Nama Lengkap</label>
                            <input type="nama" name="nama_lengkap" class="form-control" id="nama" placeholder="Masukan nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Kritik</label>
                            <textarea class="form-control" name="kritik" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Saran</label>
                            <textarea class="form-control" name="saran" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</section>@endsection
