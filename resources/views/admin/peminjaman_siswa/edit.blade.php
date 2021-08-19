@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pengembalian Peminjaman Buku Siswa</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" method="post" action="{{route('peminjaman.siswa.edit.update', $kode= (string)$pinjam->kode_peminjaman)}}">
                            @method('patch')
                            {{csrf_field() }}

                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Status</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="status" class="form-control">
                                            <option value="{{$pinjam->status}}" selected>
                                                @if ($pinjam->status == 0)
                                                Dipinjam
                                                @else
                                                Dikembalikan
                                                @endif
                                            </option>
                                            <Option value="0">Di Pinjam</Option>
                                            <Option value="1">Di kembalikan</Option>
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
