<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Model\Siswa\Siswa;
use App\Model\Kelas\Tingkatan;
use App\Model\Kelas\Jurusan;
use App\Model\Kelas\Konsentrasi;
use App\Model\Absen\Pertemuan;


class PDFController extends Controller
{
	public function absensi($siswaid)
	{
		$data['siswa'] = Siswa::all();
		$tingkat['tingkat'] = Tingkatan::first();
		$kelas['kelas'] = Konsentrasi::find($siswaid);
		$kelasabsen['kelasabsen'] = Konsentrasi::find($siswaid);
		$pdf = PDF::loadView('pdf.absensi', $data, $kelas, $tingkat , $kelasabsen);
		return $pdf->stream('invoice.pdf');
	}

}
