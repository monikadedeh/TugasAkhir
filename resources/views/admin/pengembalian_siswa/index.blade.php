@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Pengembalian</h3>
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
        <a href="{{route('pengembalian_siswa.tambahdata')}}" class="btn mx-auto btn-primary mb-3">Tambah Data</a>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Simple Data Admin
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Kode Pengembalian </th>
                                <th>Kode Peminjaman</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Status</th>
                                <th>Denda</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>001</td>
                                <td>Kimia</td>
                                <td>16-06-2021</td>
                                <td>Sudah Dikembalikan</td>
                                <td></td>
                                 <td>
                                    <a href="" class="btn mx-auto btn-danger mb-3"><i class="far fa-trash-alt"></i></a>
                                    <a href="{{route('pengembalian_siswa.editdata')}}" class="btn mx-auto btn-primary mb-3"><i class="far fa-edit"></i></a>
                                 </td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>002</td>
                                <td>B.inggris</td>
                                <td>27-06-2021</td>
                                <td>Belum Kembaliakan</td>
                                <td>Rp. 5.000</td>
                                <td>
                                    <a href="" class="btn mx-auto btn-danger mb-3"><i class="far fa-trash-alt"></i></a>
                                    <a href="{{route('pengembalian_siswa.editdata')}}" class="btn mx-auto btn-primary mb-3"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection
