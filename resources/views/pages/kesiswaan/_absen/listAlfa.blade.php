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
          <h3>Daftar Siswa Tidak Hadir<small>SMK Negeri 4 Kota Tangerang</small></h3>
          <div class="clearfix"></div>
        </div>
        {{-- x_content --}}
        <div class="x_content">
          <p>Daftar absen siswa dikelas masing-masing sesuai dengan absen yang setiap hari dilakukan.</a></p>
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <span class="section">Data Siswa</span>
                
            </div>
          </div>
          <br>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                

                  <!-- start project list -->
                  <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">No.</th>
                        <th style="width: 20%">Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Presentase Ketidakhadrian</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                      <td>#</td>
                        <td>
                          <a>Gatra Fikri Haryono</a>
                        </td>
                        <td>
                          <a href="">12 RPL 1</a>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="15"></div>
                          </div>
                          <small>15% Complete</small>
                        </td>
                        <td>
                          <a href="">Aman</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-email"></i> Kirim SMS Ketidakhadrian </a>
                        </td>
                      <tr>
                        <td>#</td>
                        <td>
                          <a>Anggi Prabowo</a>
                        </td>
                        <td>
                          <a href="">12 RPL 2</a>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="35"></div>
                          </div>
                          <small>35% Complete</small>
                        </td>
                        <td>
                          <a href="">Peringatan 1</a>
                        </td>
                       <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-email"></i> Kirim SMS Ketidakhadrian </a>
                        </td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td>
                          <a>Esa Rizky Hari Utama</a>
                        </td>
                        <td>
                          <a href="">12 RPL 3</a>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="59"></div>
                          </div>
                          <small>59% Complete</small>
                        </td>
                        <td>
                          <a href="">Peringatan 2</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-email"></i> Kirim SMS Ketidakhadrian </a>
                        </td>
                      
                      </tr>
                      
                      
                    </tbody>
                  </table>
                  <!-- end project list -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!-- /page content -->
        <!-- /page content -->

@endsection