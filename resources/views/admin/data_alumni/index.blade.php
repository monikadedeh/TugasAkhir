@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Alumni </h3>
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
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Data Alumni IPA
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumni as $items)
                            @if ($items->kelasRef->kelas == "Alumni" && $items->kelasRef->jurusan == "IPA")
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$items->nama_siswa}}</td>
                                <td>{{$items->kelasRef->kelas}} {{$items->kelasRef->jurusan}}</td>
                            </tr>
                            @else
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Data Alumni IPS
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumni as $items)
                            @if ($items->kelasRef->kelas == "Alumni" && $items->kelasRef->jurusan == "IPS")
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$items->nama_siswa}}</td>
                                <td>{{$items->kelasRef->kelas}} {{$items->kelasRef->jurusan}}</td>
                            </tr>
                            @else
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        @endsection
