<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Siswa\Siswa;

class SMSController extends Controller
{
    public function SMSHarianBolos($id)
    {
    	$siswa = Siswa::find($id);
    	$pesan = "\t SMS Sistem SMKN 4 Tangerang \n Siwa " . $siswa->nama . ".\nBolos";

    	$email_api = urlencode("angga.firdaus@raharja.info");
    	$passkey_api = urlencode("Hm123123");
    	$no_hp_tujuan = urlencode($siswa->no_hp_orangtua);
    	$isi_pesan = urlencode($pesan);

    	$url = "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
    	$result = file_get_contents($url);

    	return response()->json([code => 200]);
    }
}
