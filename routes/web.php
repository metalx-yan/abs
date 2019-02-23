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

// Route::get('/persentase', 'Kesiswaan\data_absen\DataAbsenController@listAbsen')->name('listAbsen');

// Route::get('/ajax-subcat', function() {
// 	$cat_id = Illuminate\Support\Facades\Input::get('cat_id');
//     $subcategories = App\Model\Kelas\Konsentrasi::where('jurusan_id', $cat_id)->get();
//     return Response::json($subcategories);
// });


Route::group(['middleware' => ['auth','guru']], function ()
{
	Route::resource('beranda', 'Guru\GuruController')->except('show');
	Route::group(['prefix' => 'kelas/{kelas}'], function ()
	{
		Route::get('beranda/{id}/{hari}', 'Guru\GuruController@show')->name('beranda.show');

		// Route::put('beranda/{id}/{hari}/update', 'Guru\GuruController@updaida')->name('updaida');
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
		Route::get('siswa/daftarsiswa/{siswa_id}', 'Kesiswaan\data_kelas\KelasController@daftarSiswa')->name('daftarsiswa');
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
Route::get('/ajax-subcat', function() {
	$a_id = Illuminate\Support\Facades\Input::get('a_id');
    $subcategories = App\Model\Kelas\Konsentrasi::where('jurusan_id', $a_id)->get();
    return Response::json($subcategories);
});

Route::get('/ajax-subcaty', function() {
	$b_id = Illuminate\Support\Facades\Input::get('b_id');
    $subcategories = App\Model\Siswa\Siswa::where('konsentrasi_id', $b_id)->get();
    return Response::json($subcategories);
});

Route::get('/ajax-absen', function() {
	$b_id = Illuminate\Support\Facades\Input::get('b_id');
    $subcategories = App\Model\Absen\Absen::where('siswa_id', $b_id)->get();
    return Response::json($subcategories);
});

Route::get('/daftarKonsen/{konsen}', 'Kesiswaan\data_absen\DataAbsenController@daftarKonsen')->name('daftarKonsen');
Route::get('/daftarSiswa/{konsen}/{siswa}', 'Kesiswaan\data_absen\DataAbsenController@daftarSiswa')->name('daftarSiswa');
Route::get('/printData/{id}', 'Kesiswaan\data_absen\DataAbsenController@printData')->name('printData');

Route::get('/listAlpha', 'Kesiswaan\data_absen\DataAbsenController@listAlpha')->name('listAlpha');
Route::get('/listKonsen/{konsen}', 'Kesiswaan\data_absen\DataAbsenController@listKonsen')->name('listKonsen');
Route::get('/listSiswa/{konsen}/{siswa}', 'Kesiswaan\data_absen\DataAbsenController@listSiswa')->name('listSiswa');

Route::get('pdf/absensi', 'PDFController@absensi')->name('pdf.absensi');

Route::get('/absen', 'Guru\GuruController@absen')->name('absen');
Route::get('/absensi', 'Guru\GuruController@absensi')->name('absensi');


// Informasi Siswa dan Orang Tua
Route::resource('informasi', 'Informasi\InformasiController');