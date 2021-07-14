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
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Judul Buku</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="email" id="Email" class="form-control"
                                            name="email-id" placeholder="Masukan Email ">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal Peminjaman</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="date" id="tanggal" class="form-control"
                                            name="tanggal">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Denda</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="durasi" class="form-control">
                                            <Option value="3 Hari ">5.000</Option>
                                            <Option value="5 Hari ">Ganti Buku</Option>
                                        </select>
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
