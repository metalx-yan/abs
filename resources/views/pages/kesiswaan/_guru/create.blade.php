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
            <h3>Tambah Guru <small>SMK Negeri 4 Kota Tangerang</small></h3>
          <div class="clearfix"></div>
        </div>

        {{-- x_content --}}
        <div class="x_content">
          <p>Lengkapi seluruh data yang diperlukan guna memudahkan segala aktfitas dalam penggunaan sistem ini.</a></p>
          <span class="section">Input Data Guru</span>

          <form class="form-horizontal form-label-left" action="{{ route('guru.store') }}" method="POST">
            @csrf
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIP <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="email" name="nip" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode">Kode <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="email" name="kode" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" class="form-control col-md-8 col-xs-12" data-validate-length-range="6" name="nama" required="required" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Mata Pelajaran</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" name="mata_pelajaran_id" id="tingkatan">
                    <option value="">--select--</option>
                  @foreach (App\Model\Pelajaran\MataPelajaran::all() as $pelajaran)
                      <option value="{{ $pelajaran->id }}">{{ $pelajaran->pelajaran }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 col-sm-3 col-xs-12 control-label">Hari</label>

              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" class="flat" name="hari[]" value="senin"> Senin
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" class="flat" name="hari[]" value="selasa"> Selasa
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" class="flat" name="hari[]" value="rabu"> Rabu
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" class="flat" name="hari[]" value="kamis"> Kamis
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" class="flat" name="hari[]" value="jumat"> Jumat
                  </label>
                </div>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" class="form-control col-md-8 col-xs-12" data-validate-length-range="6" name="email" required="required" type="email">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" class="form-control col-md-8 col-xs-12" data-validate-length-range="6" name="username" required="required" type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">password <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" class="form-control col-md-8 col-xs-12" data-validate-length-range="6" name="password" required="required" type="password">
              </div>
            </div>
            
            
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Bersih</button>
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

<!-- /page content -->

@endsection