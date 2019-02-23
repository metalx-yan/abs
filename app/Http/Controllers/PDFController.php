<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Model\Siswa\Siswa;
use App\Model\Kelas\Tingkatan;
use App\Model\Kelas\Jurusan;
use App\Model\Kelas\Konsentrasi;


class PDFController extends Controller
{
	public function absensi()
	{
		$data['siswa'] = Siswa::first();
		$tingkat['tingkat'] = Tingkatan::first();
		$kelas['kelas'] = Konsentrasi::first();
		$pdf = PDF::loadView('pdf.absensi', $data, $kelas, $tingkat);
		return $pdf->stream('invoice.pdf');
	}

}
