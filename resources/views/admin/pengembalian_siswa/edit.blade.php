@extends('admin.master')
@section('title', 'Admin Perpustakaan')

{{-- @section('content')
<div class="page-content">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data Pengembalian Siswa</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" method="post" action="{{route('pengembalian.siswa.edit.update', $editpengembalian->id_pengembalian_siswa)}}">
                            @method('patch')
                            {{csrf_field() }}

                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Denda</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="Nama" class="form-control"
                                            name="denda"  value="{{$editpengembalian->denda}}" placeholder="Masukan Kode Pengembalian">
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
