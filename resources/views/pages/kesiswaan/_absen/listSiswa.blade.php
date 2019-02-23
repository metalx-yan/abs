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

          
          </div>

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
                        <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                      @php
                        $targaryen = [];
                      @endphp
                      @foreach ($absensis as $absensi)
                        @foreach ($siswa->siswas as $element)
                          @if ($element->konsentrasi->id == $siswa->id)
                            @if (!in_array($siswa->id, $targaryen))
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
                                  @if ($absensi->first()->siswa->smsable())
                                    @if ($absensi->first()->siswa->persentaseKetidakhadiran() > 29 and $absensi->first()->siswa->persentaseKetidakhadiran() < 50)
                                      <button class="btn btn-primary btn-xs" onclick="smsSP1({{ $absensi->first()->siswa->id }})">{{ $absensi->first()->siswa->keterangan() }}</button>
                                    @endif
                                    @if ($absensi->first()->siswa->persentaseKetidakhadiran() > 49 and $absensi->first()->siswa->persentaseKetidakhadiran() < 79)
                                      <button class="btn btn-primary btn-xs" onclick="smsSP2({{ $absensi->first()->siswa->id }})">{{ $absensi->first()->siswa->keterangan() }}</button>
                                    @endif
                                    @if ($absensi->first()->siswa->persentaseKetidakhadiran() > 79)
                                      <button class="btn btn-primary btn-xs" onclick="smsPemanggilan({{ $absensi->first()->siswa->id }})">{{ $absensi->first()->siswa->keterangan() }}</button>
                                    @endif
                                  @endif
                                </td>
                              </tr>
                            @endif
                            @php
                              array_push($targaryen, $siswa->id)
                            @endphp
                          @endif
                      @endforeach
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

    function smsSP1(id) {
      console.log('SMS SP 1');
      $.post('http://monitoring-absen.test/api/siswa/' + id +'/sms/sp1/', function( data ) {
      });
    }

    function smsSP2(id) {
      console.log('SMS SP 2');
      $.post('http://monitoring-absen.test/api/siswa/' + id +'/sms/sp2/', function( data ) {
      });
    }

    function smsPemanggilan(id) {
      console.log('SMS SP 2');
      $.post('http://monitoring-absen.test/api/siswa/' + id +'/sms/spemanggilan/', function( data ) {
      });
    }
</script>
@endsection