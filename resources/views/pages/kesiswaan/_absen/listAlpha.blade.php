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
          <div class="row">
              <div class="form-group">
                  <form action="{{ route('listAlpha') }}" method="GET">
                      @csrf
                      <div class="col-md-3">
                          <select id="jurusan" name="jurusan_id" class="select2_single form-control" tabindex="-1">
                              <option value="0">--- Pilih ---</option>
                              @foreach (App\Model\Kelas\Jurusan::all() as $jur)
                                  <option value="{{ $jur->id }}">{{ $jur->tingkatan->tingkatan }} {{ $jur->jurusan }}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="col-md-3">
                          <select id="konsentrasi" name="konsentrasi_id" class="select2_single form-control" tabindex="-1">
                              <option value="0">--- Pilih ---</option>
                          </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Cari</button>
                  </form>
              </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                @if (app('request')->input('_token'))
                <table class="table table-striped projects" id="">
                    @php
                        $i = 1;
                        $konsentrasi = App\Model\Kelas\Konsentrasi::find(app('request')->input('konsentrasi_id'));
                    @endphp
                    <thead>
                        <tr>
                            <th style="width: 1%">No.</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($konsentrasi->siswas as $siswa)
                          <tr>
                            <td>#</td>
                            <td>
                              <a>{{ $siswa->nama }}</a>
                            </td>
                            <td>
                              <a href="">{{ $siswa->fullKelas() }}</a>
                            </td>
                            <td class="project_progress">
                              <div class="progress progress_sm">
                                <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="{{ $siswa->persentaseKetidakhadiran() }}"></div>
                              </div>
                              <small>{{ $siswa->persentaseKetidakhadiran() }} %</small>
                            </td>
                           <td>
                              @if ($siswa->smsable())
                                @if ($siswa->persentaseKetidakhadiran() > 29 and $siswa->persentaseKetidakhadiran() < 50)
                                  <button class="btn btn-primary btn-xs" onclick="smsSP1({{ $siswa->id }})">{{ $siswa->keterangan() }}</button>
                                @endif
                                @if ($siswa->persentaseKetidakhadiran() > 49 and $siswa->persentaseKetidakhadiran() < 79)
                                  <button class="btn btn-primary btn-xs" onclick="smsSP2({{ $siswa->id }})">{{ $siswa->keterangan() }}</button>
                                @endif
                                @if ($siswa->persentaseKetidakhadiran() > 79)
                                  <button class="btn btn-primary btn-xs" onclick="smsPemanggilan({{ $siswa->id }})">{{ $siswa->keterangan() }}</button>
                                @endif
                              @endif
                            </td>
                          </tr>
                          @php
                            $i++;
                          @endphp
                        @endforeach
                    </tbody>
                  </table>
                @endif
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
@section('scripts')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script>
        $('#jurusan').on('change', function(e){
            var a = e.target.value;
            jQuery.get('/api/konsentrasis/' + a, function(data) {
                $('#konsentrasi').empty();
                jQuery.each(data, function(index, obj){
                    $('#konsentrasi').append('<option value="'+obj.id+'">'+obj.konsentrasi+' '+obj.subbagian+'</option>');
                });
            });
        });
    </script>

@endsection