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
            <h3>Tambah Pelajaran <small>({{ $tp->tipe_pelajaran }})</small> <small>SMK Negeri 4 Kota Tangerang</small></h3>
          <div class="clearfix"></div>
        </div>

        {{-- x_content --}}
        <div class="x_content">
          <p>Lengkapi seluruh data yang diperlukan guna memudahkan segala aktfitas dalam penggunaan sistem ini.</a></p>
          <span class="section">Input</span>

          <form class="form-horizontal form-label-left" novalidate action="{{ route('pelajaran.store', $tp->id) }}" method="POST">
              @csrf
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="name" class="form-control col-md-8 col-xs-12" name="kode" required="required" type="text">
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Pelajaran</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="name" class="form-control col-md-8 col-xs-12" name="pelajaran" required="required" type="text">
                </select>
              </div>
            </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tingkatan</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" name="tingkatan_id" id="tingkatan">
                    <option value="">--select--</option>
                  @foreach (App\Model\Kelas\Tingkatan::all() as $tingkatan)
                      <option value="{{ $tingkatan->id }}">{{ $tingkatan->tingkatan }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group" id="jurusan_cont">
            </div>
            <div class="form-group" id="konsentrasi_cont">
            </div>
            <br>
            <br>
           <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Jam</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="name" class="form-control col-md-8 col-xs-12" name="total_jam" required="required" type="text">
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                {{-- <button type="submit" class="btn btn-primary">Bersih</button> --}}
                <button id="send" type="submit" class="btn btn-success">Simpan</button>
              </div>
            </div>
          </form>

        </div>
        {{-- ! x_content --}}
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">

                <div class="x_title">
                  <div class="row">
                    <div class="col-md-6 col-xs-12">
                      <span class="section">Data Pelajaran</span>
                    </div>
                    <div class="col-md-6 col-xs-12">
                      <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                          <div class="input-group">
                            {{-- <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                            </span> --}}
                          </div>
                      </div>
                    </div>
                  <div class="clearfix"></div>
                </div>

                {{-- Tabel Siswa --}}
                <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Kategori</th>
                        <th>Jurusan</th>
                        <th>Konsentrasi</th>
                        <th>Pelajaran</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                {{-- ! Tabel Siswa --}}
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('js_body')
  <script>
    $(document).ready(function () {
      var tingkatan = $('#tingkatan');
      var jurusan_cont = $('#jurusan_cont');
      var konsentrasi_cont = $('#konsentrasi_cont');

      tingkatan.on('change', function () {
          if (tingkatan.val() != '') {
            $.ajax({
              url: 'http://monitoring-absen.test/api/jurusans/' + tingkatan.val()
            }).done(function (response) {
              jurusan_cont.html('');
              jurusan_cont.html(`
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="jurusan" id="jurusan">
                    <option value="">--select--</option>
                  </select>
                </div>
              `);
              konsentrasi_cont.html('');
              konsentrasi_cont.html(`
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Konsentrasi</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="konsentrasi_id" id="konsentrasi">
                    <option value="">--select--</option>
                  </select>
                </div>
              `);
              response.map(function (element) {
                $('#jurusan').append('<option value="' + element.id + '">' + element.jurusan + '</option>');
              });

              $('#jurusan').on('change', function () {
                $('#konsentrasi').html('');
                if ($('#jurusan').val() != '') {
                  $.ajax({
                    url: 'http://monitoring-absen.test/api/konsentrasis/' + $('#jurusan').val()
                  }).done(function (response) {
                    response.map(function (element) {
                      $('#konsentrasi').append('<option value="' + element.id + '">' + element.konsentrasi + '</option>');
                    });
                  }); 
                }
              });
            });
          }
      });
    });
  </script>
@endpush