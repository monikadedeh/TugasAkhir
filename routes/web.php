<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Admin


//Dahboard
Route::get('admin/dashboard', 'admin\LoginController@dashboard')->middleware('CekLoginAdmin');


//Login
Route::get('admin/login', 'admin\LoginController@masuk')->name('admin.login');
Route::post('admin/login/simpan', 'admin\LoginController@simpan')->name('admin.login.simpan');


//Logout
Route::get('admin/logout', 'admin\LoginController@logout')->name('admin.logout');


//register
Route::get('admin/register', 'admin\RegisterController@regis')->name('admin.register');
Route::post('admin/register/add', 'admin\RegisterController@addProcess')->name('admin.register.addProses');


//Update Profil
Route::get('profil/admin/edit/{id}', 'admin\ProfilController@edit')->name('profil.admin.edit')->middleware('CekLoginAdmin');;
Route::get('profil/admin/update/{id}', 'admin\ProfilController@updateProfil')->name('profil.admin.update');
Route::patch('profil/admin/simpan/{id}', 'admin\ProfilController@update')->name('profil.admin.simpan');



//Forgot profil
Route::get('admin/update/password/{id}', 'admin\ProfilController@updatepw')->name('admin.update.password')->middleware('CekLoginAdmin');
Route::patch('admin/simpan/password/{id}', 'admin\ProfilController@updatePassword')->name('admin.simpan.password');



//Admin
Route::get('admin/index', 'admin\AdminController@index')->name('admin.index')->middleware('CekLoginAdmin');
Route::post('admin/simpan', 'admin\AdminController@simpan')->name('admin.simpandata');
Route::get('admin/edit/{id}', 'admin\AdminController@edit')->name('admin.editdata');
Route::patch('admin/edit/update/{id}', 'admin\AdminController@update')->name('admin.update');
Route::delete('admin/delete/{id}', 'admin\AdminController@delete')->name('admin.delete');

//guru
Route::get('guru/index', 'admin\GuruController@index')->name('guru.index')->middleware('CekLoginAdmin');
Route::delete('guru/delete/{id}', 'admin\GuruController@delete')->name('guru.delete');
Route::get('guru/detail/{id}', 'admin\GuruController@detail')->name('guru.detaildata');


//Siswa
Route::get('siswa/index', 'admin\SiswaController@index')->name('siswa.index')->middleware('CekLoginAdmin');
Route::delete('siswa/delete/{id}', 'admin\SiswaController@delete')->name('siswa.delete');
Route::get('siswa/detail/{id}', 'admin\SiswaController@detail')->name('siswa.detaildata');


//Buku
Route::get('buku/index', 'admin\BukuController@index')->name('buku.index')->middleware('CekLoginAdmin');
Route::get('buku/tambah', 'admin\BukuController@tambah')->name('buku.tambahdata');
Route::post('buku/simpan', 'admin\BukuController@simpan')->name('buku.simpandata');
Route::get('buku/edit/{id}', 'admin\BukuController@edit')->name('buku.editdata');
Route::patch('buku/edit/update/{id}', 'admin\BukuController@update')->name('buku.update');
Route::get('buku/detail/{id}', 'admin\BukuController@detail')->name('buku.detaildata');
Route::delete('buku/delete/{id}', 'admin\BukuController@delete')->name('buku.delete');


//Kategori
Route::get('kategori/index', 'admin\KategoriController@index')->name('kategori.index')->middleware('CekLoginAdmin');
Route::get('kategori/tambah', 'admin\KategoriController@tambah')->name('kategori.tambahdata');
Route::post('kategori/simpan', 'admin\KategoriController@simpan')->name('kategori.simpandata');
Route::get('kategori/edit/{id}', 'admin\KategoriController@edit')->name('kategori.editdata');
Route::patch('kategori/edit/update/{id}', 'admin\KategoriController@update')->name('kategori.update');
Route::delete('kategori/delete/{id}', 'admin\KategoriController@delete')->name('kategori.delete');


//Pemimjaman guru
Route::get('peminjaman/guru/index', 'admin\PeminjamanController@pinjam')->name('peminjaman.guru.index')->middleware('CekLoginAdmin');
Route::get('peminjaman/guru/dit/{kode_peminjaman}', 'admin\PeminjamanController@edit')->name('peminjaman.guru.edit');
Route::patch('peminjaman/guru/edit/update/{kode_peminjaman}', 'admin\PeminjamanController@update')->name('peminjaman.guru.edit.update');
Route::delete('peminjaman/guru/delete/{kode_peminjaman}', 'admin\PeminjamanController@delete')->name('peminjaman.guru.delete');
Route::get('peminjaman/guru/detail/{kode_peminjaman}', 'admin\PeminjamanController@detail')->name('peminjaman.guru.detail');


//Pemimjaman siswa
Route::get('peminjaman/siswa/index', 'admin\PeminjamansiswaController@pinjaman_siswa')->name('peminjaman.siswa.index')->middleware('CekLoginAdmin');
Route::get('peminjaman/siswa/edit/{kode_peminjaman}', 'admin\PeminjamansiswaController@edit')->name('peminjaman.siswa.edit');
Route::patch('peminjaman/siswa/edit/update/{kode_peminjaman}', 'admin\PeminjamansiswaController@update')->name('peminjaman.siswa.edit.update');
Route::delete('peminjaman/siswa/delete/{kode_peminjaman}', 'admin\PeminjamansiswaController@delete')->name('peminjaman.siswa.delete');
Route::get('peminjaman/siswa/detail/{kode_peminjaman}', 'admin\PeminjamansiswaController@detail')->name('peminjaman.siswa.detail');


//Pengembalian guru
Route::get('pengembalian/guru/index', 'admin\PengembalianController@pengembalian_guru')->name('pengembalian.guru.index')->middleware('CekLoginAdmin');
Route::get('pengembalian/guru/tambah', 'admin\PengembalianController@tambah')->name('pengembalian.tambahdata');
Route::get('pengembalian/guru/edit', ' admin\PengembalianController@edit')->name('pengembalian.editdata');


//Pengembalian siswa
Route::get('pengembalian/siswa/index', 'admin\PengembaliansiswaController@pengembalian_siswa')->name('pengembalian.siswa.index')->middleware('CekLoginAdmin');
Route::get('pengembalian/siswa/tambah', 'admin\PengembaliansiswaController@tambah')->name('pengembalian_siswa.tambahdata');
Route::get('pengembalian/siswa/edit', ' admin\PengembaliansiswaController@edit')->name('pengembalian_siswa.editdata');

//Krtik & Saran
Route::get('admin/kritik/index', 'admin\KrtikController@index')->name('admin.kritik.index')->middleware('CekLoginAdmin');
Route::delete('admin/kritik/delete/{id}', 'admin\KrtikController@delete')->name('admin.kritik.delete');



//User Landingpage
Route::get('/', 'landingpage\LandingController@index')->name('/');

//BUKU
Route::get('user/buku/index', 'landingpage\BukuController@index')->name('user.buku.index');
Route::get('user/buku/detail/{id}', 'landingpage\BukuController@detail')->name('user.buku.detail');

//Login user
Route::get('user/login', 'landingpage\LoginuserController@loginuser')->name('user.login');
Route::post('user/login/simpan', 'landingpage\LoginuserController@simpan')->name('user.login.simpan');

//Login guru
Route::get('user/login/guru', 'landingpage\LoginGuruController@loginguru')->name('user.login.guru');
Route::post('user/login/guru/simpan', 'landingpage\LoginGuruController@simpan')->name('user.login.guru.simpan');

//Logout User
Route::get('user/logout', 'landingpage\LoginuserController@logout')->name('user.logout');

//Logout Guru
Route::get('user/logout/guru', 'landingpage\LoginGuruController@logoutguru')->name('user.logout.guru');

//register User
Route::get('user/register', 'landingpage\RegisteruserController@registeruser')->name('user.register');
Route::post('user/register/add', 'landingpage\RegisteruserController@addProcess')->name('user.register.addProses');

//register Guru
Route::get('user/register/guru', 'landingpage\RegisterGuruController@registerguru')->name('user.register.guru');
Route::post('user/register/add/guru', 'landingpage\RegisterGuruController@addProcess')->name('user.register.addProses.guru');

//peminjaman user
Route::get('peminjaman/user/{id_buku}', 'landingpage\PeminjamanController@index')->name('peminjaman.landing.index');
Route::post('peminjaman/user/{id_buku}', 'landingpage\PeminjamanController@simpanPeminjaman')->name('peminjaman.landing.save');

//Ganti informasi user
Route::get('profil/user/edit/{id}', 'landingpage\ProfiluserController@edit')->name('profil.user.edit')->middleware('CekLoginUser');
Route::get('profil/user/update/{id}', 'landingpage\ProfiluserController@updateprofiluser')->name('profil.user.update');
Route::patch('profil/user/simpan/{id}', 'landingpage\ProfiluserController@update')->name('profil.user.simpan');

//Ganti informasi guru
Route::get('profil/guru/edit/{id}', 'landingpage\ProfilGuruController@edit')->name('profil.guru.edit')->middleware('CekLoginUser');
Route::get('profil/guru/update/{id}', 'landingpage\ProfilGuruController@updateprofilguru')->name('profil.guru.update')->middleware('CekLoginUser');
Route::patch('profil/guru/simpan/{id}', 'landingpage\ProfilGuruController@update')->name('profil.guru.simpan');

//ubah pw user
Route::get('user/update/password/{id}', 'landingpage\ProfiluserController@updatepw')->name('user.update.password');
Route::patch('user/simpan/password/{id}', 'landingpage\ProfiluserController@updatePassword')->name('user.simpan.password');

//ubah pw guru
Route::get('user/guru/update/password/{id}', 'landingpage\ProfilGuruController@updatepw')->name('user.guru.update.password');
Route::patch('user/guru/simpan/password/{id}', 'landingpage\ProfilGuruController@updatePassword')->name('user.guru.simpan.password');

//History Peminjaman
Route::get('user/history', 'landingpage\HistoryController@index')->name('landing.histori.index')->middleware('CekLoginUser');
Route::get('user/history/detail/{kd_peminjaman}', 'landingpage\HistoryController@detail')->name('landing.histori.detail')->middleware('CekLoginUser');

//Kritik dan saran
Route::get('user/kritik/index', 'landingpage\KritikController@index')->name('user.kritik.index');
Route::post('user/kritik/simpan', 'landingpage\KritikController@simpan')->name('user.kritik.simpandata');
