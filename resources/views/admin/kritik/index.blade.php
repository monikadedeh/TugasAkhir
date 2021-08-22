@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Kritik & Saran</h3>
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
                     Data Kritik & Saran
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>Nama Lengkap</th>
                                <th>Krtik</th>
                                <th>Saran</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kritik as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nama_lengkap}}</td>
                                <td>{{$item->kritik}}</td>
                                <td>{{$item->saran}}</td>
                                <td> @if($item->status  == 0)
                                    Tidak Konfimasi
                                    @else
                                    Konfimasi
                                    @endif
                                </td>
                                <td>
                                    <form action="{{route('admin.kritik.delete', $item->id)}}" id="delete{{$item->id}}" onsubmit="return confirm('yakin ingin menghapus?')" class="d-inline" method="POST">
                                        @method('delete')
                                        <button class="btn mx-auto btn-danger mb-3"><i class="far fa-trash-alt"></i></button>
                                        @csrf
                                    </form>
                                    <a href="{{route('admin.kritik.edit', $item->id)}}" class="btn mx-auto btn-primary mb-3"><i class="far fa-edit"></i></a>
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
