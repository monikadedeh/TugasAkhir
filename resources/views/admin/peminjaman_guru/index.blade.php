@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Peminjaman Guru</h3>
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
                    Data Peminjaman Guru
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Peminjam </th>
                                <th>Judul Buku</th>
                                <th>Peminjam</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Status</th>

                                <th>Durasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pinjam as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->kode_peminjaman}}</td>
                                <td>{{$item->bukuRef->nama_buku}}</td>
                                <td>{{$item->guruRef->nama_guru}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->durasi}}</td>
                                <td>
                                    <form action="{{route('peminjaman.guru.delete', $item->kode_peminjaman)}}" kode_peminjaman="delete{{$item->id}}" onsubmit="return confirm('yakin ingin menghapus?')" class="d-inline" method="POST">
                                        @method('delete')
                                        <button class="btn mx-auto btn-danger mb-3"><i class="far fa-trash-alt"></i></button>
                                        @csrf
                                    </form>
                                    <a href="{{route('peminjaman.guru.edit',$item->kode_peminjaman)}}" class="btn mx-auto btn-primary mb-3"><i class="far fa-edit"></i></a>
                                    <a href="{{route('peminjaman.guru.detail',$item->kode_peminjaman)}}" class="btn mx-auto btn-primary mb-3"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('pengembalian.guru.tambah', $item->kode_peminjaman)}}" class="btn mx-auto btn-success mb-3"><i class="far fa-list-alt"></i></i>Kembalikan</a>
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
