@extends('pages.kesiswaan.layouts.main')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_title">
                    <h3>Data Siswa <small>SMK Negeri 4 Kota Tangerang</small></h3>
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
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Subbagian</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="konsentrasi_id" class="select2_single form-control" tabindex="-1">
                                        @foreach ($jurusan->konsentrasis as $konsentrasi)
                                            <option value="{{ $konsentrasi->id }}">{{ $konsentrasi->subbagian }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIS <span class="required">*</span></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" id="email" name="nis" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="name" class="form-control col-md-8 col-xs-12" name="nama" required="required" type="text">
                                  </div>
                            </div>

                            <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">No. Handphone Orang Tua <span class="required">*</span>
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

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="x_panel">
                            <div class="x_title">
                                <div class="x_content">
                                    <span class="section">Daftar Siswa</span>
                                </div>


                                <table class="table table-striped jambo_table bulk_action">
                                  <thead>
                                    <tr class="headings">
                                      <th class="column-title">Tingkatan </th>
                                      <th class="column-title">Jurusan </th>
                                      <th class="column-title">Konsentrasi </th>
                                      <th class="column-title">Sub Bagian </th>
                                      <th class="column-title">NIS </th>
                                      <th class="column-title">Nama </th>
                                      <th class="column-title">No. Telpon Orang Tua </th>

                                      <th class="column-title no-link last"><span class="nobr">Action</span></th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    @foreach ($jurusan->konsentrasis as $konsentrasi)
                                    @foreach ($konsentrasi->siswas as $siswa)
                                      {{-- expr --}}
                                    <tr class="even pointer">
                                      <td class=" ">{{ $konsentrasi->jurusan->tingkatan->tingkatan }}</td>
                                      <td class=" ">{{ $konsentrasi->jurusan->jurusan }}</td>
                                      <td class=" ">{{ $konsentrasi->konsentrasi }}</td>
                                      <td class=" ">{{ $konsentrasi->jurusan->tingkatan->tingkatan }} {{ $konsentrasi->konsentrasi }} {{ $konsentrasi->subbagian }}</td>
                                      <td class="">{{ $siswa->nis }}</td>
                                      <td class="">{{ $siswa->nama }}</td>
                                      <td class="">{{ $siswa->no_hp_orangtua }}</td>
                                    <tr>
                                    @endforeach
                                   @endforeach
                                    </tr>
                                    </tr>
                                  </tbody>
                                </table>

                            </div>

                        </div>

                    </div>
                  </div>


      </div>
    </div>
  </div>
</div>

@endsection