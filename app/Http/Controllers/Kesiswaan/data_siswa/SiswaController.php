<?php

namespace App\Http\Controllers\Kesiswaan\data_siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Kelas\Jurusan;
use App\Model\Siswa\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($jurusan_id)
    {
        // dd($jurusan_id);
        $jurusan = Jurusan::find($jurusan_id);

        return view('pages.kesiswaan._siswa.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($jurusan_id, Request $request)
    {
        // dd($request);
        $jurusan = Jurusan::find($jurusan_id);
        // dd($jurusan);
        $jurusan->konsentrasis->find($request->konsentrasi_id)->siswas()->create(
            $request->all()
        );
        return redirect()->route('siswa.create', $jurusan->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $siswa = Siswa::first($id);
        // return view('pages.kesiswaan._siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($majorid, $id)
    {
        $update = Siswa::find($id);

        return view('pages.kesiswaan._siswa.edit', compact('update'));
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
        $update = Siswa::findOrFail($id);
        $update->nis = $request->nis;
        $update->nama = $request->nama;
        $update->no_hp_orangtua = $request->no_hp_orangtua;
        $update->konsentrasi_id = $request->konsentrasi_id;
        $update->save();


        return redirect()->route('daftarsiswa', [$update->id, $update->konsentrasi->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);

        $siswa->delete();

        return back();
    }
}
