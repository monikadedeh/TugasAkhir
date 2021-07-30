@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Kelas</h3>
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
        <a href="{{route('kelas.tambah')}}" class="btn mx-auto btn-primary mb-3">Tambah Data</a>
        <section class="section">
            <div class="card">
                <div class="card-header">
                     Data Kelas
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas </th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->kelas}}</td>
                                <td>{{$item->jurusan}}</td>
                                <td>
                                    <form action="{{route('kelas.delete', $item->id_kelas)}}" id="delete{{$item->id_kelas}}" onsubmit="return confirm('yakin ingin menghapus?')" class="d-inline" method="POST">
                                        @method('delete')
                                        <button class="btn mx-auto btn-danger mb-3"><i class="far fa-trash-alt"></i></button>
                                        @csrf
                                    </form>
                                    <a href="{{route('kelas.edit', $item->id_kelas)}}" class="btn mx-auto btn-primary mb-3"><i class="far fa-edit"></i></a>
                                    <a href="{{route('kelas.detail',$item->id_kelas)}}" class="btn mx-auto btn-primary mb-3"><i class="fas fa-eye"></i></a>
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
