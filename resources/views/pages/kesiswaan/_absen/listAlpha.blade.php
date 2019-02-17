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
                        <th>Status</th
                        <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($absensis as $absensi)
                      <tr>
                        <td>#</td>
                        <td>
                          <a>{{ $absensi->first()->siswa->nama }}</a>
                        </td>
                        <td>
                          <a href="">{{ $absensi->first()->siswa->fullKelas() }}</a>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="{{ $absensi->first()->siswa->persentaseKetidakhadiran() }}"></div>
                          </div>
                          <small>{{ $absensi->first()->siswa->persentaseKetidakhadiran() }} %</small>
                        </td>
                        <td>
                          <a href="">{{ $absensi->first()->siswa->status() }}</a>
                        </td>
                       <td>
                          @if ($absensi->first()->siswa->smsable())
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-email"></i>{{ $absensi->first()->siswa->keterangan() }}</a>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    function sendSMS() {
      $.ajax({
        type: "POST",
        contentType : 'application/json',
        url: "http://45.32.107.195/sms/api_sms_reguler_send_json.php",
        data: {
          "apikey":"b061980e7d4501ce34073effebfd67c8",
          "callbackurl":"",
          "datapacket": [
            {"number":"081585366463","message":"asdhasdkasljdaskdhjahsdjhasjkhdkjashdjashdkjashdkasj"}
          ]
        },
        dataType: 'json',
        accessControlAllowOrigin: '*'
      });
    }
</script>
@endsection