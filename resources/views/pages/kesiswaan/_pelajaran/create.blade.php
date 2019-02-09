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
                        <h3>Data Pelajaran <small>{{ $tp->tipe_pelajaran }}</small> <small>SMK Negeri 4 Kota Tangerang</small></h3>
                        <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <p>Lengkapi seluruh data yang diperlukan guna memudahkan segala aktfitas dalam penggunaan sistem ini.</a></p>
                    <span class="section">Tambah Pelajaran</span>
                        <form class="form-horizontal form-label-left" novalidate action="{{ route('pelajaran.store', $tp->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-8 col-xs-12" name="kode" required="required" type="text">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Pelajaran</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-8 col-xs-12" name="pelajaran" required="required" type="text">
                                  </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Daftar Siswa<small>SMK Negeri 4 Kota Tangerang</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link col-md-offset-12"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                        </div>
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button" aria-expanded="false">Pilih Konsentrasi <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu">
                                @foreach (App\Model\Pelajaran\TipePelajaran::all() as $tipe)
                                    <li value="{{ $tipe->tipe_pelajaran }}"><a href="#">{{ $tipe->tipe_pelajaran }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">Tingkatan </th>
                                    <th class="column-title" align="center">Jurusan </th>
                                    <th class="column-title">Konsentrasi </th>
                                    <th class="column-title">Kelas</th>
                                    <th class="column-title no-link last"><span class="nobr"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($tp->tipe_pelajarans as $konsentrasi) --}}
                                <tr class="even pointer">
                                    <td class=" ">{{-- {{ $konsentrasi->tipe_pelajaran }} --}}</td>
                                    <td>
                                        <button type="button" class="fa fa-edit"></button>
                                        <button type="button" class="fa fa-trash"></button>
                                    </td>
                                <tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
{{-- 
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
@endpush --}}