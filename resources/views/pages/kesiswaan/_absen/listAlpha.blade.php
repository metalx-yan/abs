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

          <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">

                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 20%">Jurusan</th>
                                        <th style="width: 20%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jurusan as $jurusan)
                                    <tr>
                                        <td class="">{{ $jurusan->tingkatan->tingkatan }} {{ $jurusan->jurusan }}</td>
                                        <td style="padding-left: 500px;">
                                            <a class="fa fa-search btn btn-info" href="{{ route('listKonsen', $jurusan->id) }}"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">No.</th>
                        <th>NIS</th>
                        <th style="width: 20%">Nama Siswa</th>
                        <th style="width: 20%">1</th>
                        <th style="width: 20%">2</th>
                        <th style="width: 20%">3</th>
                        <th style="width: 20%">4</th>
                        <th style="width: 20%">5</th>
                        <th style="width: 20%">6</th>
                        <th style="width: 20%">7</th>
                        <th style="width: 20%">8</th>
                        <th style="width: 20%">9</th>
                        <th style="width: 20%">10</th>
                        <th style="width: 20%">11</th>
                        <th style="width: 20%">12</th>
                        <th style="width: 20%">13</th>
                        <th style="width: 20%">14</th>
                        </tr>
                    </thead>
                    <tbody>
                      {{-- @foreach ($absensis as $absensi) --}}
                        @foreach ($siswa->siswas as $siswa)
                      <tr>
                        <td class=""></td>
                        <td class="">{{ $siswa->nis }}</td>
                        <td class="">{{ $siswa->nama }}</td>
                        @foreach ($siswa->absens as $absen)
                          {{-- expr --}}
                          @if ($absen->pertemuan)
                            {{-- expr --}}
                            <td class="">Hadir</td>
                            @elseif($absen->pertemuan)
                              {{-- expr --}}
                            <td class="">Nggak Hadir</td>
                          @endif
                        @endforeach
                            
                          @endforeach
                          
                      
                      </tr>
                    </tbody>
                  </table>

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