<?php

namespace App\Http\Controllers\Kesiswaan\data_absen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Absen\Absensi;
use App\Model\Absen\Absen;
use App\Model\Kelas\Jurusan;
use App\Model\Siswa\Siswa;
use App\Model\Kelas\Konsentrasi; 
use App;

class DataAbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listAbsen(Request $request)
    {
        $jurusan = Jurusan::all();
        $absen = Absen::all();
        $req = $request->all();
        return view('pages.kesiswaan._absen.listAbsen', compact('jurusan','siswa', 'absen', 'req'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function daftarKonsen($id)
    {
        $konsen = Jurusan::find($id)->konsentrasis;

        return view('pages.kesiswaan._absen.daftarKonsen', compact('konsen'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function daftarSiswa($id, $siswa)
    {
        // dd($id);
        $siswa = Konsentrasi::find($siswa);

        return view('pages.kesiswaan._absen.daftarSiswa', compact('siswa'));
    }

     /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function printData($siswa)
    {

        // return view('pages.kesiswaan._absen.printData', compact('siswa'));
        // $book_data = Book::all();
        $siswa = Konsentrasi::find($siswa);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view('pages.kesiswaan._absen.printData', compact('siswa')))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listAlpha()
    {
        $jurusan = Jurusan::all();
        $absensis = Absensi::absenTanpaKeterangan();
        // dd($absensis);
        return view('pages.kesiswaan._absen.listAlpha', compact('absensis','jurusan'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listKonsen($id)
    {
        $konsen = Jurusan::find($id)->konsentrasis;

        return view('pages.kesiswaan._absen.listKonsen', compact('konsen'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listSiswa($id, $siswa)
    {
        // dd($id);
        $siswa = Konsentrasi::find($siswa);
        // dd($siswa->id);

        $kons = Siswa::all();

        $absensis = Absensi::absenTanpaKeterangan();

        return view('pages.kesiswaan._absen.listSiswa', compact('siswa', 'absensis','kons'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
