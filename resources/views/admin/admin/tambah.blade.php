{{-- @extends('admin.master')
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
                        <form class="form form-horizontal" action="{{url('admin/simpan')}}" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Nama" class="form-control"
                                            name="nama_pustakawan" placeholder="Nama">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="email" id="Email" class="form-control"
                                            name="email_perpusatkawaan" placeholder="Email">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Alamat </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Alamat" class="form-control"
                                            name="alamat" placeholder="Alamat">
                                    </div>
                                    <div class="col-md-4">
                                        <label>No Telepon </label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="No telepon" class="form-control"
                                            name="no_telepon" placeholder="No telepon">
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
@endsection --}}
