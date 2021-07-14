@extends('admin.master')
@section('title', 'Admin Perpustakaan')

@section('content')
<div class="page-heading">
                <h3>Dashboard Admin</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-8 col-lg-4 col-md-8">
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
                                                <h6 class="font-extrabold mb-0">3</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-8">
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
                                                <h6 class="font-extrabold mb-0">50</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-8">
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
                                                <h6 class="font-extrabold mb-0">600</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="far fa-list-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-muted font-semibold">Buku</h6>
                                                <h6 class="font-extrabold mb-0">112</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                     <i class="fas fa-address-book"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Peminjaman</h6>
                                                <h6 class="font-extrabold mb-0">2</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-8">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="far fa-address-book"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Pengembalian</h6>
                                                <h6 class="font-extrabold mb-0">2</h6>
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
