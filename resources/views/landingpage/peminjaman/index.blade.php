@extends('landingpage.master')
@section('title', 'User Perpustakaan')

@section('content')
<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="single-info row mt-40 align-items-center">
            <div class="card col-12">
                <div class="card-body">
                    <h3>Form Peminjaman Buku</h3>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputNama">Nama Peminjam</label>
                            <input type="nama" class="form-control" id="nama" placeholder="Masukan nama peminjam">
                          </div>
                          <div class="from-group">
                            <label for="exampleInputDurasi">Judul Buku</label>
                        </div>
                        <div class="form-group">
                            <select name="durasi" class="form-control">
                                <Option value="3 Hari ">Bahasa Indonesia</Option>
                                <Option value="5 Hari ">Kimia</Option>
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="exampleInputDurasi">Durasi</label>
                        </div>
                        <div class="form-group">
                            <select name="durasi" class="form-control">
                                <Option value="3 Hari ">3 Hari</Option>
                                <Option value="5 Hari ">5 Hari</Option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</section>@endsection
