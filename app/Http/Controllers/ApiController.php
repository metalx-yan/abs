<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kelas\Tingkatan;
use App\Model\Kelas\Jurusan;

class ApiController extends Controller
{
    public function jurusans($tingkatan)
    {
    	$tingkatan = Tingkatan::find($tingkatan);
    	return response()->json($tingkatan->jurusans);
    }

    public function konsentrasis($jurusan)
    {
    	$jurusan = Jurusan::find($jurusan);
    	return response()->json($jurusan->konsentrasis);
    }
}
