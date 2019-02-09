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






Route::group(['middleware' => ['auth','guru']], function ()
{
	Route::resource('beranda', 'Guru\GuruController')->except('show');
	Route::group(['prefix' => 'kelas/{kelas}'], function ()
	{
		Route::get('beranda/{id}/{hari}', 'Guru\GuruController@show')->name('beranda.show');
	});
});

Route::group(['middleware' => ['auth','kesiswaan']], function ()
{
	Route::resource('kesiswaan','Kesiswaan\KesiswaanController');
	Route::resource('guru', 'Kesiswaan\data_guru\DataGuruController');
	Route::group(['prefix' => 'guru/{id}'], function ()
	{
		Route::post('/mata_pelajarans', 'Kesiswaan\data_guru\DataGuruController@attachMataPelajaran')->name('guru.mata_pelajaran');
	});
	Route::group(['prefix' => '{jurusan_id}'], function ()
	{
		Route::resource('kelas', 'Kesiswaan\data_kelas\KelasController');
		Route::resource('siswa', 'Kesiswaan\data_siswa\SiswaController');
		Route::group(['prefix' => 'kelas/{id}'], function ()
		{
			Route::post('/mata-pelajarans', 'Kesiswaan\data_kelas\KelasController@attachMapel')->name('kelas.attach.mapel');
		});
	});
	Route::group(['prefix' => '{tipe_pelajaran_id}'], function ()
	{
		Route::resource('pelajaran', 'Kesiswaan\data_pelajaran\PelajaranController');
	});
});

Route::get('/atur', 'Kesiswaan\data_guru\DataGuruController@atur')->name('atur');

Route::group(['middleware' => ['auth']], function ()
{
	Route::get('select-role', function () {
		if (Auth::user()->hasRole('kesiswaan')) {
			return redirect()->route('kesiswaan.index');
		} else {
			return redirect()->route('beranda.index');
		}
	});
});


Route::get('/listAbsen', 'Kesiswaan\data_absen\DataAbsenController@listAbsen')->name('listAbsen');
Route::get('/listAlpha', 'Kesiswaan\data_absen\DataAbsenController@listAlpha')->name('listAlpha');
// Route::get('/kirim', 'Kesiswaan\data_absen\DataAbsenController@kirim')->name('kirim');