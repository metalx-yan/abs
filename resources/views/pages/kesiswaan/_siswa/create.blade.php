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

                        <form class="form-horizontal form-label-left" novalidate action="{{ route('siswa.store', $jurusan->id) }}" method="POST">
                        @csrf
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Konsentrasi</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="konsentrasi_id" class="select2_single form-control" tabindex="-1">
                                        @foreach ($jurusan->konsentrasis as $konsentrasi)
                                            <option value="{{ $konsentrasi->id }}">{{ $konsentrasi->konsentrasi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub bagian</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="konsentrasi_id" class="select2_single form-control" tabindex="-1">
                                        @foreach ($jurusan->konsentrasis as $konsentrasi)
                                            <option value="{{ $konsentrasi->id }}">{{ $konsentrasi->subbagian }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIS</span></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" id="email" name="nis" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama</span></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="name" class="form-control col-md-8 col-xs-12" name="nama" required="required" type="text">
                                  </div>
                            </div>

                            <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">No. Telepon Orang Tua </span>
                              </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-8 col-xs-12"  name="no_hp_orangtua" required="required" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>

                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Daftar Siswa<small>SMK Negeri 4 Kota Tangerang</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link col-md-offset-12"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                        </div>
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button" aria-expanded="false">Pilih Konsentrasi <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu">
                                @foreach (App\Model\Kelas\Jurusan::all() as $jur)
                                    <li value="{{ $jur->jurusan }}"><a href="#">{{ $jur->jurusan }}</a></li>
                                @endforeach
                            </ul>
                        </div> 
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
</div>

@endsection