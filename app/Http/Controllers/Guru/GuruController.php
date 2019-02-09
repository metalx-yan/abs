<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pelajaran\MataPelajaran;
use App\Model\Kelas\Konsentrasi;
use App\Model\Absen\Pertemuan;
use App\Model\Siswa\Siswa;
use App\Model\Absen\Absen;
use Auth;

class GuruController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('stop');
        return view('pages.guru.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $konsentrasi = Konsentrasi::find($request->konsentrasi_id);
        $mata_pelajaran = MataPelajaran::find($request->mata_pelajaran_id);
        $pertemuan = Pertemuan::where('konsentrasi_id', $konsentrasi->id)->where('mata_pelajaran_id', $mata_pelajaran->id);
        $new = Pertemuan::create([
            'pertemuan' => $pertemuan->count() + 1,
            'konsentrasi_id' => $konsentrasi->id,
            'mata_pelajaran_id' => $mata_pelajaran->id
        ]);

        foreach ($request->siswa as $siswa) {
            $new->absens()->create(['siswa_id' => $siswa]);
        }

        foreach ($konsentrasi->siswas as $siswa) {
            if (!in_array($siswa->id, $request->siswa)) {
                $new->absensis()->create([
                    'siswa_id' => $siswa->id,
                    'keterangan' =>  'alpha'
                ]);
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $konsentrasi, $hari)
    {
        $absen = Auth::user()->guru->mataPelajarans()->wherePivot('mata_pelajaran_id', $id)->wherePivot('hari', $hari)->first();
        $konsentrasi = Konsentrasi::find($konsentrasi);
        return view('pages.guru.show', compact('absen', 'konsentrasi', 'hari'));

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
