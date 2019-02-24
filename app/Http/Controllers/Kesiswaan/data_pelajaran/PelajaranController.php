<?php

namespace App\Http\Controllers\Kesiswaan\data_pelajaran;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pelajaran\MataPelajaran;
use App\Model\Pelajaran\TipePelajaran;
use App\Model\Kelas\Jurusan;

class PelajaranController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($tp)
    {
        $tp = TipePelajaran::find($tp);

        $jurusan = Jurusan::all();

        $pel = MataPelajaran::all();
        // dd($pel);
        return view('pages.kesiswaan._pelajaran.create', compact('tp', 'pel','jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($tp, Request $req)
    {
        $this->validate($req, [
            'kode' => 'unique:mata_pelajarans'
        ]);
        $tipe = TipePelajaran::find($tp)->mataPelajarans()->create($req->all());
        return redirect()->route('kelas.create', $tipe->id)->with('sweetalert', 'Pelajaran Berhasil Ditambahkan');
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
        $mata = MataPelajaran::find($id);

        return view('pages.kesiswaan._kelas', compact('mata'));
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
    public function destroy($id, $a)
    {
        $del = MataPelajaran::find($a);
        $del->delete();

        return redirect()->back()->with('sweetalert', 'Test');
    }
}
