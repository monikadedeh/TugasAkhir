@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" method="post" action="{{route('peminjaman.guru.edit.update', $kode= (string)$pinjam->kode_peminjaman)}}">
                            @method('patch')
                            {{csrf_field() }}

                            <div class="form-body">
                                <div class="row">

                            <div class="col-md-4">
                                <label>Kode Peminjam </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input disabled type="text" id="Nama" class="form-control" value="{{$kode}}">
                            </div>
                                    <div class="col-md-4">
                                        <label>Judul Buku</label>
                                    </div>

                                    <div class="col-md-8 form-group">
                                        <select name="buku_id" class="form-control">
                                            <option value="{{$pinjam->buku_id}}">{{$pinjam->bukuRef->nama_buku}}</option>
                                            @foreach ($buku as $b)
                                            <option value="{{$b->id}}">{{$b->nama_buku}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-md-4">
                                        <label>Nama Guru</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="guru_id" class="form-control">
                                            <option value="{{$pinjam->guru_id}}" selected>{{$pinjam->guruRef->nama_guru}}</option>
                                            @foreach ($guru as $g )
                                            <option value="{{$g->id}}">{{$g->nama_guru}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Durasi</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="durasi" class="form-control">
                                            <option value="{{$pinjam->durasi}}" selected>{{$pinjam->durasi}} Hari</option>
                                            <Option value="3">3 Hari</Option>
                                            <Option value="5">5 Hari</Option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Status</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="status" class="form-control">
                                            @if ($pinjam->status == 1)
                                            <Option value="{{$pinjam->status}}">Di Pinjam</Option>
                                            @else
                                            <Option value="{{$pinjam->status}}">Di kembalikan</Option>
                                            @endif
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
