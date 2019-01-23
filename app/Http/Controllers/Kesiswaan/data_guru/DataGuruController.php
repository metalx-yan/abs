<?php

namespace App\Http\Controllers\Kesiswaan\data_guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Guru\Guru;
use App\User;
use App\Model\Pelajaran\MataPelajaran;

class DataGuruController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kesiswaan._guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $guru = Guru::create([
            'nip'=>$req->nip,
            'kode'=>$req->kode,
            'nama'=>$req->nama
            
        ]);

        $user = User::create([
            'name'=>$req->nama,
            'username'=>$req->username,
            'password'=>$req->password,
            'role_id'=>2
        ]);

        $mapel = MataPelajaran::find($req->mata_pelajaran_id);
        foreach ($req->hari as $hari) {
            $guru->MataPelajarans()->attach($mapel, ['hari' => $hari]);
        }

        return redirect()->route('guru.create');

    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function atur()
    {
        return view('pages.kesiswaan._guru.atur');
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
