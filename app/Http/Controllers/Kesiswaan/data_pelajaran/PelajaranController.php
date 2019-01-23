<?php

namespace App\Http\Controllers\Kesiswaan\data_pelajaran;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pelajaran\MataPelajaran;
use App\Model\Pelajaran\TipePelajaran;

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
        return view('pages.kesiswaan._pelajaran.create', compact('tp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($tp, Request $req)
    {
        $tipe = TipePelajaran::find($tp)->mataPelajarans()->create($req->all());
        return redirect()->route('kelas.create', $tipe->id);
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
