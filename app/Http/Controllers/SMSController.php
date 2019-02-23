<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Siswa\Siswa;

class SMSController extends Controller
{
    public function SMSHarianBolos($id)
    {
    	$siswa = Siswa::find($id);
    	$pesan = "\t Assalamualaikum Wr. Wb \n Selamat Siang ! \n Kami dari SMKN 4 Kota Tangerang, Ingin memberi tahu bahwa Anak Anda yang bernama \n " . $siswa->nama . ".\n Tidak Masuk Pelajaran hari ini \n Terimakasih. \n Wassalamualaikum";

    	$email_api = urlencode("angga.firdaus@raharja.info");
    	$passkey_api = urlencode("Hm123123");
    	$no_hp_tujuan = urlencode($siswa->no_hp_orangtua);
    	$isi_pesan = urlencode($pesan);

    	$url = "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
    	$result = file_get_contents($url);

    	return response()->json([code => 200]);
    }

    public function SMSSP1($id)
    {
        $siswa = Siswa::find($id);
        $pesan = "\t Assalamualaikum Wr. Wb \n Selamat Siang ! \n Kami dari SMKN 4 Kota Tangerang, Ingin memberi tahu bahwa Anak Anda yang bernama \n " . $siswa->nama . ".\n Tingkat ketidakhadriannya sudah mencapai 30% atau Peringatan 1. \n Mohon untuk memberikan arahan, terimakasih. \n Wassalamualaikum Wr. Wb.";

        $email_api = urlencode("angga.firdaus@raharja.info");
        $passkey_api = urlencode("Hm123123");
        $no_hp_tujuan = urlencode($siswa->no_hp_orangtua);
        $isi_pesan = urlencode($pesan);

        $url = "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
        $result = file_get_contents($url);

        return response()->json([code => 200]);
    }

    public function SMSSP2($id)
    {
        $siswa = Siswa::find($id);
        $pesan = "\t Assalamualaikum Wr. Wb \n Selamat Siang ! \n Kami dari SMKN 4 Kota Tangerang, Ingin memberi tahu bahwa Anak Anda yang bernama \n " . $siswa->nama . ".\n Tingkat ketidakhadriannya sudah mencapai 50% atau Peringatan 2. \n Mohon untuk memberikan arahan, terimakasih. \n Wassalamualaikum Wr. Wb.";

        $email_api = urlencode("angga.firdaus@raharja.info");
        $passkey_api = urlencode("Hm123123");
        $no_hp_tujuan = urlencode($siswa->no_hp_orangtua);
        $isi_pesan = urlencode($pesan);

        $url = "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
        $result = file_get_contents($url);

        return response()->json([code => 200]);
    }

    public function SMSPemanggilan($id)
    {
        $siswa = Siswa::find($id);
        $pesan = "\t Assalamualaikum Wr. Wb \n Selamat Siang ! \n Kami dari SMKN 4 Kota Tangerang, Ingin memberi tahu bahwa Anak Anda yang bernama \n " . $siswa->nama . ".\n Tingkat ketidakhadriannya sudah mencapai 50%. Oleh karena itu sekolah mengundang kepada Bapak/Ibu/Wali Murid untuk datang kesekolah untuk bersama-sama memberikan pengrahan kepada Siswa yang bersangkutan. \n Wassalamualaikum Wr. Wb.";

        $email_api = urlencode("angga.firdaus@raharja.info");
        $passkey_api = urlencode("Hm123123");
        $no_hp_tujuan = urlencode($siswa->no_hp_orangtua);
        $isi_pesan = urlencode($pesan);

        $url = "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
        $result = file_get_contents($url);

        return response()->json([code => 200]);
    }
}
