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
          <h3>Daftar Siswa <small>SMK Negeri 4 Kota Tangerang</small></h3>
          <div class="clearfix"></div>
        </div>
        {{-- x_content --}}
        <div class="x_content">
          <p>Daftar seluruh Guru di SMK Negeri 4 Kota Tangerang yang sudah terdapat dalam Sistem.</a></p>
          <div class="row">
            
          </div>
          <br>
          {{-- row --}}
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                  

                {{-- Tabel Siswa --}}
                <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Konsentrasi</th>
                        <th>Jurusan</th>
                        <th>Bagian</th>
                        <th>No.Handphone Ortu</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Tiger</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><i class="fa fa-edit"></i></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Tiger</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><i class="fa fa-edit"></i> </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Tiger</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><i class="fa fa-edit"></i></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                {{-- ! Tabel Siswa --}}
                
                <a class="btn btn-app">
                  <i class="fa fa-plus"></i> Tambah
                </a>

              </div>
            </div>
          </div>
          {{-- ! row --}}


        <div class="row">
          <div class="col-md-12 col-xs-12">
            <div class="x_panel">

              <div class="x_title">
                <h2>Form Tambah Siswa <small>SMK Negeri 4 Kota Tangerang</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">
                <div class="row">
                  
                {{-- <br /> --}}
                <form class="form-horizontal form-label-left input_mask">

                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nomor Induk Siswa" name="nis">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control" id="inputSuccess3" placeholder="Nama" name="nama">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control" id="inputSuccess3" placeholder="Jurusan" name="jurusan">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Kelas" name="kelas">
                    <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control" id="inputSuccess5" placeholder="No, Handphone Orang Tua" name="no_hp">
                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>


                  <div class="form-group">
                    {{-- <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3"> --}}
                      <button type="button" class="btn btn-primary">Cancel</button>
                      <button class="btn btn-primary" type="reset">Reset</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                    {{-- </div> --}}
                  </div>
                </form>

              </div>
            </div>
          </div>



    </div>
  </div>
</div>
<!-- /page content -->

@endsection