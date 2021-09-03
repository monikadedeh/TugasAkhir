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
                        <form class="form form-horizontal" action="{{route('kelas.simpan')}}" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Jurusan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                                <select name="jurusan"class="form-control">
                                                    <Option value="pilih"> Pilih Jurusan</Option>
                                                    <option value="IPA">IPA</option>
                                                    <option value="IPS">IPS</option>
                                                </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kelas</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="kelas"class="form-control">
                                            <Option value="pilih kelas"> Pilih Kelas</Option>
                                            <option value="10-1">10-1</option>
                                            <option value="10-2">10-2</option>
                                            <option value="10-3">10-3</option>
                                            <option value="10-4">10-4</option>
                                            <option value="10-5">10-5</option>
                                            <option value="11-1">11-1</option>
                                            <option value="11-2">11-2</option>
                                            <option value="11-3">11-3</option>
                                            <option value="11-4">11-4</option>
                                            <option value="11-5">11-5</option>
                                            <option value="12-1">12-1</option>
                                            <option value="12-2">12-2</option>
                                            <option value="12-3">12-3</option>
                                            <option value="12-4">12-4</option>
                                            <option value="12-5">12-5</option>
                                            <option value="Alumni">Alumni</option>

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
