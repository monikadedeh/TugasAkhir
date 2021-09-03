@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Laporan Data Peminjaman Siswa</h3>
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
        {{-- @if ($lap->pengembalianRef->siswaRef->kelasRef->jurusan === 'IPA') --}}
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Laporan Data Peminjaman Siswa IPA
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Buku</th>
                                <th>Tanggal PemInjaman</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lap as $items)
                            @if ($items->siswaRef->kelasRef->jurusan == "IPA")
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$items->siswaRef->nama_siswa}}</td>
                                <td>{{$items->siswaRef->kelasRef->kelas}} {{$items->siswaRef->kelasRef->jurusan}}</td>
                                <td>{{$items->bukuRef->nama_buku}}</td>
                                <td>{{$items->created_at->isoFormat('dddd, D MMMM Y')}}</td>
                            </tr>
                            @else
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        {{-- @else --}}
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Laporan Data Peminjaman Siswa IPS
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Buku</th>
                                <th>Tanggal Peminjaman</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lap as $items)
                            @if ($items->siswaRef->kelasRef->jurusan == "IPS")
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$items->siswaRef->nama_siswa}}</td>
                                <td>{{$items->siswaRef->kelasRef->kelas}} {{$items->siswaRef->kelasRef->jurusan}}</td>
                                <td>{{$items->bukuRef->nama_buku}}</td>
                                <td>{{$items->created_at->isoFormat('dddd, D MMMM Y')}}</td>
                            </tr>
                            @else
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        {{-- @endif --}}
    </div>
</div>
@endsection

