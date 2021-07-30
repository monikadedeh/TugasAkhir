@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Kritik & Saran</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{route('admin.kritik.edit.update', $editkritik->id)}}" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Status</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                                            @error('status') <div class="invalid-feedbavk">{{$message}}</div>@enderror
                                            <Option value="pilih"> Pilih</Option>
                                            <Option value="0 ">Tidak Konfimasi</Option>
                                            <Option value=" 1">Konfimasi</Option>
                                        </select>
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
