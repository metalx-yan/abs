@extends('pages.kesiswaan.layouts.main')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
          </ul>
            <h3>Tambah Siswa <small>SMK Negeri 4 Kota Tangerang</small></h3>
          <div class="clearfix"></div>
        </div>

        {{-- x_content --}}
        <div class="x_content">
          <p>Lengkapi seluruh data yang diperlukan guna memudahkan segala aktfitas dalam penggunaan sistem ini.</a></p>
          <span class="section">Input Data Siswa</span>

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
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIS <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="email" name="nis" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
              </label>
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
                {{-- <button type="submit" class="btn btn-primary">Bersih</button> --}}
                <button id="send" type="submit" class="btn btn-success">Simpan</button>
              </div>
            </div>
          </form>

        </div>
        {{-- ! x_content --}}
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">

                <div class="x_title">
                  <div class="row">
                    <div class="col-md-6 col-xs-12">
                      <span class="section">Data Pelajaran</span>
                    </div>
                    <div class="col-md-6 col-xs-12">
                      <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                          <div class="input-group">
                            {{-- <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                            </span> --}}
                          </div>
                      </div>
                    </div>
                  <div class="clearfix"></div>
                </div>

                {{-- Tabel Siswa --}}
                <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Tingkatan</th>
                        <th>Jurusan</th>
                        <th>Konsentrasi</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>No. Telepon Orang Tua</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

      </div>
    </div>
  </div>
</div>

@endsection