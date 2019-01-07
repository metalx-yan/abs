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

// Kesiswaan
Route::get('/index', 'Kesiswaan\KesiswaanController@index')->name('index');

	// Data Kelas
	Route::resource('tingkatan', 'Kesiswaan\data_kelas\TingkatanController');
	
	Route::get('/tambahGuru', 'Kesiswaan\data_guru\DataGuruController@tambahGuru')->name('tambahGuru');
	Route::get('/daftarGuru', 'Kesiswaan\data_guru\DataGuruController@daftarGuru')->name('daftarGuru');

	// Data Siswa
	// Route::get('/tambahSiswa', 'Kesiswaan\data_siswa\DataSiswaController@tambahSiswa')->name('tambahSiswa');
	// Route::get('/daftarSiswa', 'Kesiswaan\data_siswa\DataSiswaController@daftarSiswa')->name('daftarSiswa');
	

	// Data Kelas
	Route::get('/listAbsen', 'Kesiswaan\data_absen\DataAbsenController@listAbsen')->name('listAbsen');
	Route::get('/listAlfa', 'Kesiswaan\data_absen\DataAbsenController@listAlfa')->name('listAlfa');

	// Pelajaran
	

	// Guru
	// Route::get('/profilGuru', 'GuruController@profilGuru')->name('profilGuru');
	// Route::get('/dataAbsen', 'GuruController@dataAbsen')->name('dataAbsen');