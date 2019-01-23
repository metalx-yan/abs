<?php

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
 
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::group(['prefix' => '{jurusan_id}'], function ()
{
	Route::resource('kelas', 'Kesiswaan\data_kelas\KelasController');
	Route::resource('siswa', 'Kesiswaan\data_siswa\SiswaController');
});
Route::get('pelajaran/{$tipe}', 'Kesiswaan\data_pelajaran\PelajaranController@tampil')->name('tampil');

Route::group(['prefix' => '{tipe_pelajaran_id}'], function ()
{
	Route::resource('pelajaran', 'Kesiswaan\data_pelajaran\PelajaranController');
});

Route::get('guru/atur', 'Kesiswaan\data_guru\DataGuruController@atur')->name('atur');

Route::resource('guru', 'Kesiswaan\data_guru\DataGuruController');

Route::get('/tambahKelas', 'Kesiswaan\data_kelas\KelasController@tambahKelas')->name('tambahKelas');
Route::get('/tambahGuru', 'Kesiswaan\data_guru\DataGuruController@tambahGuru')->name('tambahGuru');
Route::get('/daftarGuru', 'Kesiswaan\data_guru\DataGuruController@daftarGuru')->name('daftarGuru');
Route::get('/listAbsen', 'Kesiswaan\data_absen\DataAbsenController@listAbsen')->name('listAbsen');
Route::get('/listAlfa', 'Kesiswaan\data_absen\DataAbsenController@listAlfa')->name('listAlfa');
// Route::get('/kirim', 'Kesiswaan\data_absen\DataAbsenController@kirim')->name('kirim');

Route::get('/profilGuru', 'Guru\GuruController@profilGuru')->name('profilGuru');
Route::get('/dataAbsen', 'Guru\GuruController@dataAbsen')->name('dataAbsen');
Route::get('/absenSiswa', 'Guru\GuruController@absenSiswa')->name('absenSiswa');

Route::group(['middleware' => ['auth','guru']], function ()
{
	Route::get('/test-guru', function () {
	    return 'test guru';
	});
});

Route::group(['middleware' => ['auth','kesiswaan']], function ()
{
	Route::resource('kesiswaan','Kesiswaan\KesiswaanController');
});