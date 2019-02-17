@extends('pages.kesiswaan.layouts.main')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_title">
                    <h3>Data Siswa <small> Kelas {{ $jurusan->tingkatan->tingkatan }} {{ $jurusan->jurusan }} SMK Negeri 4 Kota Tangerang</small></h3>
                        <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <p>Lengkapi seluruh data yang diperlukan guna memudahkan segala aktfitas dalam penggunaan sistem ini.</a></p>
                    <span class="section">Tambah Siswa</span>

                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">NIS </th>
                                    <th class="column-title">Nama </th>
                                    <th class="column-title">Konsentrasi </th>
                                    <th class="column-title">Kelas</th>
                                    <th class="column-title">Telpon Orang Tua </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jurusan->konsentrasis as $konsentrasi)
                                    @foreach ($konsentrasi->siswas as $siswa)
                                      <tr class="even pointer">
                                        <td class="">{{ $siswa->nis }}</td>
                                        <td class="">{{ $siswa->nama }}</td>
                                        <td class=" ">{{ $konsentrasi->konsentrasi }}</td>
                                        <td class=" ">{{ $konsentrasi->jurusan->tingkatan->tingkatan }} {{ $konsentrasi->konsentrasi }} {{ $konsentrasi->subbagian }}</td>
                                        <td class="">{{ $siswa->no_hp_orangtua }}</td>
                                        <td>
                                          <button type="button" class="fa fa-edit"></button>
                                          <button type="button" class="fa fa-trash"></button>
                                        </td>
                                      <tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection