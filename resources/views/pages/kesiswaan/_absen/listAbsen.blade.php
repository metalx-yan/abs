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
          <p>Daftar absen siswa dikelas masing-masing sesuai dengan absen yang setiap hari dilakukan.</a></p>
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <span class="section">Data Siswa </span>
                <div class="btn-group">
                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button" aria-expanded="false">Pilih Kelas <span class="caret"></span></button>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
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
                        <th style="width: 20%">#Edit</th>
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
                        <td>
                          <ul class="list-inline">
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
                          </div>
                          <small>57% Complete</small>
                        </td>
                        <td>
                          <button type="button" class="btn btn-success btn-xs">Success</button>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td>
                          <a>Pesamakini Backend UI</a>
                          <br />
                          <small>Created 01.01.2015</small>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="47"></div>
                          </div>
                          <small>47% Complete</small>
                        </td>
                        <td>
                          <button type="button" class="btn btn-success btn-xs">Success</button>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td>
                          <a>Pesamakini Backend UI</a>
                          <br />
                          <small>Created 01.01.2015</small>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="77"></div>
                          </div>
                          <small>77% Complete</small>
                        </td>
                        <td>
                          <button type="button" class="btn btn-success btn-xs">Success</button>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td>
                          <a>Pesamakini Backend UI</a>
                          <br />
                          <small>Created 01.01.2015</small>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                          </div>
                          <small>60% Complete</small>
                        </td>
                        <td>
                          <button type="button" class="btn btn-success btn-xs">Success</button>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td>
                          <a>Pesamakini Backend UI</a>
                          <br />
                          <small>Created 01.01.2015</small>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="12"></div>
                          </div>
                          <small>12% Complete</small>
                        </td>
                        <td>
                          <button type="button" class="btn btn-success btn-xs">Success</button>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td>
                          <a>Pesamakini Backend UI</a>
                          <br />
                          <small>Created 01.01.2015</small>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="35"></div>
                          </div>
                          <small>35% Complete</small>
                        </td>
                        <td>
                          <button type="button" class="btn btn-success btn-xs">Success</button>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td>
                          <a>Pesamakini Backend UI</a>
                          <br />
                          <small>Created 01.01.2015</small>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="87"></div>
                          </div>
                          <small>87% Complete</small>
                        </td>
                        <td>
                          <button type="button" class="btn btn-success btn-xs">Success</button>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td>
                          <a>Pesamakini Backend UI</a>
                          <br />
                          <small>Created 01.01.2015</small>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="77"></div>
                          </div>
                          <small>77% Complete</small>
                        </td>
                        <td>
                          <button type="button" class="btn btn-success btn-xs">Success</button>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td>
                          <a>Pesamakini Backend UI</a>
                          <br />
                          <small>Created 01.01.2015</small>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                            <li>
                              <img src="images/user.png" class="avatar" alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="77"></div>
                          </div>
                          <small>77% Complete</small>
                        </td>
                        <td>
                          <button type="button" class="btn btn-success btn-xs">Success</button>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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

@endsection