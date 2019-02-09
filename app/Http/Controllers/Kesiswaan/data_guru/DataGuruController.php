<?php

namespace App\Http\Controllers\Kesiswaan\data_guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Guru\Guru;
use App\User;
use App\Model\Kelas\Konsentrasi;
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
        $guru = Guru::all();
        return view('pages.kesiswaan._guru.create',compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $user = User::create([
            'name'=>$req->nama,
            'username'=>$req->username,
            'password'=>$req->password,
            'role_id'=>2
        ]);
        $guru = Guru::create([
            'nip'=>$req->nip,
            'kode'=>$req->kode,
            'nama'=>$req->nama,
            'user_id'=>$user->id
        ]); 


        return redirect()->route('guru.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($req)
    {
        $guru = Guru::find($req);
        $konsentrasi = Konsentrasi::all();
        return view('pages.kesiswaan._guru.show', compact('guru', 'konsentrasi'));
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

    public function attachMataPelajaran(Request $request, $id)
    {
        $guru = Guru::find($id);
        $mp = MataPelajaran::find($request->mata_pelajaran_id);
        foreach ($request->hari as $hari) {
            $guru->mataPelajarans()->attach($mp, ['konsentrasi_id' => $request->konsentrasi_id, 'hari' => $hari, 'jam' => $request->all()["time-" . $hari]]);
        }

        return redirect()->back();
    }
}
