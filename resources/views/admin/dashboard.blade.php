@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-heading">
                <h3>Dashboard Admin</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-8 col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="far fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-muted font-semibold">Admin</h6>
                                                <h6 class="font-extrabold mb-0">{{$admin}}</h6>
                                                <a href="{{route('admin.kritik.index')}}">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="fas fa-chalkboard-teacher"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-muted font-semibold">Guru</h6>
                                                <h6 class="font-extrabold mb-0">{{$guru}}</h6>
                                                <a href="{{route('guru.index')}}">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-muted font-semibold">Siswa</h6>
                                                <h6 class="font-extrabold mb-0">{{$siswa}}</h6>
                                                <a href="{{route('siswa.index')}}">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-muted font-semibold">Kelas</h6>
                                                <h6 class="font-extrabold mb-0">{{$kelas}}</h6>
                                                <a href="{{route('kelas.index')}}">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon gray">
                                                    <i class="far fa-list-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-muted font-semibold">Buku</h6>
                                                <h6 class="font-extrabold mb-0">{{$buku}}</h6>
                                                <a href="{{route('buku.index')}}">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="far fa-list-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Kategori</h6>
                                                <h6 class="font-extrabold mb-0">{{$kategori}}</h6>
                                                <a href="{{route('kategori.index')}}">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="far fa-list-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Kritik & Saran</h6>
                                                <h6 class="font-extrabold mb-0">{{$kritik}}</h6>
                                                <a href="{{route('admin.kritik.index')}}">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon deep sky blue">
                                                     <i class="fas fa-address-book"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Peminjaman Guru</h6>
                                                <h6 class="font-extrabold mb-0">{{$pinjamguru}}</h6>
                                                <a href="{{route('peminjaman.guru.index')}}">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon deep sky blue">
                                                     <i class="fas fa-address-book"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Peminjaman Siswa</h6>
                                                <h6 class="font-extrabold mb-0">{{$pinjamsiswa}}</h6>
                                                <a href="{{route('peminjaman.siswa.index')}}">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="far fa-address-book"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Pengembalian Guru</h6>
                                                <h6 class="font-extrabold mb-0">{{$pengembalianguru}}</h6>
                                                <a href="{{route('pengembalian.guru.index')}}">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="far fa-address-book"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Pengembalian Siswa</h6>
                                                <h6 class="font-extrabold mb-0">{{$pengembaliansiswa}}</h6>
                                                <a href="{{route('pengembalian.siswa.index')}}">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon deep sky blue">
                                                    <i class="far fa-address-book"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Kelas</h6>
                                                <h6 class="font-extrabold mb-0">{{$kelas}}</h6>
                                                <a href="{{route('admin.laporan.index')}}">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @endsection
