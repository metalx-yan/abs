<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - #123</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            font-style: times;
            /*background-color: #60A7A6;*/
            /*color: #FFF;*/
        }

        .information td h3 {
            text-align: center;
            font-family: times;
        }


        .information h3 {
            text-align: center;
            font-family: times;
        }

        .information hr.style-eight { overflow: visible; /* For IE */ padding: 0; border: none; border-top: medium double #333; color: #333; text-align: center; } hr.style-eight:after { content: "§"; display: inline-block; position: relative; top: -0.7em; font-size: 1.5em; padding: 0 0.25em; background: white; }


        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }

    </style>

</head>
<body>

<div class="information">
    <div class="col-md-12">
        {{-- <div class="col-md-6">
            <img src="../images/logo-smk.jpg" alt="">
        </div> --}}
        <div class="col-md-6">


<table width="100%">
<tr>
<td width="25" align="center"><img src="Tes.jpg" width="60%"></td>
<td width="50" align="center"><h3>DAFTAR ABSENSI SISWA</h3><br><h3>{{ $kelas->konsentrasi }} {{ $kelas->subbagian }}</h3><h3>SMK Negeri 4 Kota Tangerang</h3></td>
<td width="25" align="center"><img src="Logo DN.jpg" width="100%"></td>
</tr>
</table>
<hr>


<br/>


<div class="invoice">
    <table width="100%" border="1">
        <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
            <th>12</th>
            <th>13</th>
            <th>14</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($kelas->siswas as $siswa)

                {{-- expr --}}
            <tr>
                    {{-- expr --}}
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->nama }}</td>
                    @forelse ($kelas->pertemuans as $pertemuan)
                <td>
                    @if (!is_null($pertemuan->absens->where('siswa_id', $siswa->id)->first()))
                        <input type="checkbox" class="flat" disabled="disabled" checked="checked">
                          @else
                        <input type="checkbox" class="flat" disabled="disabled">                                
                    @endif
                </td>
                @empty
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            @endforelse
            </tr>
            @endforeach
        </tbody>

        {{-- <tfoot>
        <tr>
            <td colspan="1"></td>
            <td align="left">Total</td>
            <td align="left" class="gray">€15,-</td>
        </tr>
        </tfoot> --}}
    </table>
</div>

<br>
<input style="padding-left: 100px;" type="checkbox" class="flat" disabled="disabled" checked="checked"> = Hadir
<br>
<input style="padding-left: 100px;" type="checkbox" class="flat" disabled="disabled"> = Tidak Hadir
    
<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                Company Slogan
            </td>
        </tr>

    </table>
</div>
</body>
</html>