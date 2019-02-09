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
        $jurusan = Jurusan::find($jurusan_id);
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
