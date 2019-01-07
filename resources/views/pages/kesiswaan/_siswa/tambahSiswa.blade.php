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

          <form class="form-horizontal form-label-left" novalidate action="" method="POST">
            
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
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" name="kelas_bagian_id">
                  <option></option>
                </select>
              </div>
            </div>
           {{--  <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Konsentrasi <span class="required"></span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
              
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">jurusan</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" name="jurusan">
                  <option>Rekayasa Perangkat Lunak</option>
                  <option>Teknik Konstruksi Batu dan Beton</option>
                  <option>Teknik Gambar Bangun</option>
                  <option>Teknik Survei dan Pemetaan</option>
                  <option>eknik Pemeliharaan Mesin Industri</option>
                  <option>Teknik Instalasi Tenaga Listrik</option>
                  <option>Teknik Otomasi Industri</option>
                  <option>Teknik Pemesinan</option>
                  <option>Teknik Gambar Mesin</option>
                </select>
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Kelas Bagian <span class="required"></span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" class="form-control col-md-8 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama" required="required" type="text">
              </div>
            </div> --}}

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">No. Handphone Orang Tua <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" class="form-control col-md-8 col-xs-12"  name="handphone" required="required" type="text">
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

      </div>
    </div>
  </div>
</div>

@endsection