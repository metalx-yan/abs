
@extends('pages.guru.layouts.main')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Daftar Hadir</h3>
            </div>
        </div>



    
        <div class="clearfix"></div>

        <div class="row">
              <div class="col-md-12">
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
                          <div class="btn-group">
                      <button type="button" class="btn btn-danger">Jurusan</button>
                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a>
                        </li>
                        <li><a href="#">Another action</a>
                        </li>
                        <li><a href="#">Something else here</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a>
                        </li>
                      </ul>

                      <button type="button" class="btn btn-danger">Kelas</button>
                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a>
                        </li>
                        <li><a href="#">Another action</a>
                        </li>
                        <li><a href="#">Something else here</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a>
                        </li>
                      </ul>
                    <br>
                    <br>
                    </div>

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
            
        <!-- /page content -->
@endsection