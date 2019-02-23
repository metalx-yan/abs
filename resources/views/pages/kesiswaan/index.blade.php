@extends('pages.kesiswaan.layouts.main')

@section('content')

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon" style="padding-top: 20px"><i class="fa fa-building-o"></i></div>
                  <div class="count">{{ App\Model\Kelas\Konsentrasi::all()->count() }}</div>
                  <h3>Jumlah Kelas</h3>
                  <p>SMKN 4 Kota Tangerang</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon" style="padding-top: 20px"><i class="fa fa-users"></i></div>
                  <div class="count">{{ App\Model\Siswa\Siswa::all()->count() }}</div>
                  <h3>Jumlah Siswa</h3>
                  <p>SMKN 4 Kota Tangerang</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon" style="padding-top: 20px"><i class="fa fa-list-alt"></i></div>
                  <div class="count">{{ App\Model\Pelajaran\MataPelajaran::all()->count() }}</div>
                  <h3>Jumlah Pelajaran</h3>
                  <p>SMKN 4 Kota Tangerang</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon" style="padding-top: 20px"><i class="fa fa-edit"></i></div>
                  <div class="count">{{ App\Model\Guru\Guru::all()->count() }}</div>
                  <h3>Jumlah Guru</h3>
                  <p>SMKN 4 Kota Tangerang</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Persentase Ketidakhadiran Kelas <small>Weekly progress</small></h2>
                    <div class="filter">
                      {{-- <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                      </div> --}}
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="demo-container" style="height:280px">
                        <div id="chart_plot_02" class="demo-placeholder"></div>
                      </div>
                      <div class="tiles">
                        <div class="col-md-4 tile">
                          <span>Total Sessions</span>
                          <h2>231,809</h2>
                          <span class="sparkline11 graph" style="height: 160px;">
                               <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                        </div>
                        <div class="col-md-4 tile">
                          <span>Total Revenue</span>
                          <h2>$231,809</h2>
                          <span class="sparkline22 graph" style="height: 160px;">
                                <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                        </div>
                        <div class="col-md-4 tile">
                          <span>Total Sessions</span>
                          <h2>231,809</h2>
                          <span class="sparkline11 graph" style="height: 160px;">
                                 <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                        </div>
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