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
        $this->validate($request, [
            'nis'=>'required|unique:siswas',
            'no_hp_orangtua'=>'required|unique:siswas'
        ]);
        $jurusan = Jurusan::find($jurusan_id);
        // dd($jurusan);
        $jurusan->konsentrasis->find($request->konsentrasi_id)->siswas()->create(
            $request->all()
        );
        return redirect()->route('siswa.create', $jurusan->id)->with('sweetalert', 'Data Siswa Berhasil Ditambahkan');
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
        dd($id);
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


        return redirect()->route('daftarsiswa', [$update->id, $update->konsentrasi->id])->with('sweetalert', 'Data Siswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $a)
    {
        $siswa = Siswa::find($a);
        // dd($siswa);
        $siswa->delete();

        return back()->with('sweetalert', 'Data Siswa Berhasil Dihapus');
    }
}
