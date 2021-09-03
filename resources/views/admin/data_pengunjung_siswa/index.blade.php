@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Pengunjung Guru</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        {{-- <a href="#" class="btn mx-auto btn-primary mb-3">Tambah Data</a> --}}
        <section class="section">
            <div class="card">
                <div class="card-header">
                     Data Pengunjung Siswa
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>Nama Lengkap</th>
                                <th>Kelas</th>
                                <th>Kegiatan</th>
                                <th>Tanggal Pengunjung</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengunjung as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nama_lengkap}}</td>
                                <td>{{$item->kelas}}</td>
                                <td>{{$item->kegiatan}}</td>
                                <td>{{$item->created_at->isoFormat('dddd, D MMMM Y')}}</td>
                                <td>
                                    <a href="{{route('admin.pengunjung.siswa.detaildata', $item->id)}}" class="btn mx-auto btn-primary mb-3"><i class="fas fa-eye"></i></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection
