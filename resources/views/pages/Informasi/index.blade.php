
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Monitoring Absensi Siswa | Informasi</title>

    <!-- Bootstrap -->
    <link href="{{ asset('/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
  <div class="container body">
      <div class="main_container">
          <!-- page content -->
          <div class="col-md-12">
              <div class="col-middle">
                  <div class="text-center text-center">
                      <h4 class="error-number">Informasi Absensi Siswa</h4>
                          <h2>SMK Negeri 4 Kota Tangerang</h2>
                              
                              {{-- x_content --}}
                              <div class="x_content">
                                  <form class="form-horizontal form-label-left" novalidate action="{{-- {{ route('pelajaran.store', $tp->id) }} --}}" method="POST">
                                      @csrf
                                          <div class="form-group">
                                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tingkatan dan Jurusan</label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <select id="category" name="jurusan_id" class="select2_single form-control" tabindex="-1">
                                                          <option value="{{-- {{ $jur->id }} --}}">{{-- {{ $jur->tingkatan->tingkatan }} {{ $jur->jurusan }} --}}</option>
                                                      </select>
                                                  </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Konsentrasi dan Kelas</label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <select name="konsentrasi_id" id="subcategory" class="select2_single form-control" tabindex="-1">
                                                          <option value=""></option>
                                                      </select>
                                                  </div>
                                          </div>
                                          <div class="form-group">
                                              <div class="col-md-1 col-md-offset-8" style="padding-left:50px">
                                                  <button id="send" type="submit" class="btn btn-success">Cari</button>
                                              </div>
                                          </div>
                                          <hr>
                                  </form>
                              </div>  
                              {{-- ! x_content --}}
                  </div>
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <div class="x_panel">
                      <div class="x_title">
                          <h2>Absen Siswa</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                              </ul>
                              <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                          <p>Data Absen Siswa Kelas</p>
                              <!-- start project list -->
                              <table class="table table-striped projects">
                                  <thead>
                                      <tr>
                                          <th style="width: 1%">No.</th>
                                          <th style="width: 20%">NIS</th>
                                          <th>Nama Siswa</th>
                                          <th>Hadir</th>
                                          <th style="width: 20%">Tidak Hadir</th>
                                          <th>Persentase</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>#</td>
                                          <td>
                                              <a>Pesamakini Backend UI</a>
                                              <br />
                                              <small>Created 01.01.2015</small>
                                          </td>
                                          <td></td>
                                          <td>
                                              <button type="button" class="btn btn-success btn-xs">Success</button>
                                          </td>
                                          <td></td>
                                          <td class="project_progress">
                                              <div class="progress progress_sm">
                                                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
                                              </div>
                                                  <small>57% Complete</small>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                      </div>
                  </div>
              </div>
          </div>
    </div>
</div>

    <!-- jQuery -->
    <script src="{{ asset('/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('/vendors/nprogress/nprogress.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('/build/js/custom.min.js') }}"></script>
  </body>
</html>