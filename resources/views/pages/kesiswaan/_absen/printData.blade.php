<html>
  <head>
    
  </head>

  <body>
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
                        <th>NIS</th>
                        <th style="width: 20%">Nama Siswa</th>
                        </tr>
                    </thead>
                    <tbody>
      @foreach($siswa->siswas as $sis)

                      <tr>
                        <td class="">{{ $sis->id }}</td>

                      </tr>
@endforeach                      
                    </tbody>
                  </table>
                  <div class="bs-glyphicons">
                            <ul class="bs-glyphicons-list">
                                <li>
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                                    <span class="glyphicon-class">Cetak Data Siswa</span>
                                </li>
                            </ul>
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
  </body>
</html>
