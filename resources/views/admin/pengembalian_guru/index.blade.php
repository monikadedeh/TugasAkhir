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

        <section class="section">
            <div class="card">
                <div class="card-header">
                    Data Pengembalian Buku Guru
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Pengembalian </th>
                                <th>Kode Peminjaman</th>
                                <th>Status</th>
                                <th>Denda</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pjguru as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->kode_pengembalian}}</td>
                                <td>{{$item->kode_peminjaman}}</td>
                                    @if($item->status == 0)
                                    <td>Dikembalikan</td>
                                    @endif
                                <td>{{$item->denda}}</td>
                                <td>
                                    <form action="{{route('pengembalian.guru.delete', $item->kode_pengembalian)}}" kode_pengembalian="delete{{$item->id}}" onsubmit="return confirm('yakin ingin menghapus?')" class="d-inline" method="POST">
                                        @method('delete')
                                        <button class="btn mx-auto btn-danger mb-3"><i class="far fa-trash-alt"></i></button>
                                        @csrf
                                    </form>
                                    <a href="{{route('pengembalian.guru.edit', $item->kode_pengembalian)}}" class="btn mx-auto btn-primary mb-3"><i class="far fa-edit"></i></a>
                                    <a href="{{route('pengembalian.guru.detail',$item->kode_pengembalian)}}" class="btn mx-auto btn-primary mb-3"><i class="fas fa-eye"></i></a>
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
