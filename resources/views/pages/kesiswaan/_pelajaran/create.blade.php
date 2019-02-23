@extends('pages.kesiswaan.layouts.main') 

@section('links')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">  
@endsection

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
                            {{-- @if ($tp->id == 1)
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="jurusan" name="jurusan_id" class="select2_single form-control" tabindex="-1">
                                        <option value="0">-- Pilih --</option>
                                        @foreach ($jurusan as $jur)
                                            <option value="{{ $jur->id }}">{{ $jur->tingkatan->tingkatan }} {{ $jur->jurusan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @endif --}}
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
                            <h2>Daftar Pelajaran<small> {{ $tp->tipe_pelajaran }} SMK Negeri 4 Kota Tangerang</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link col-md-offset-12"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                        </div>
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">Jurusan </th>
                                    <th class="column-title" align="center">Kode </th>
                                    <th class="column-title">Pelajaran </th>
                                    <th class="column-title no-link last"><span class="nobr"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                  @foreach ($pel as $element)
                                    @if ($element->tipe_pelajaran_id == $tp->id)
                                      {{-- expr --}}
                                <tr class="even pointer">
                                    {{-- expr --}}
                                    <td class=" ">{{ $element->tipePelajaran->tipe_pelajaran }}</td>
                                    <td class=" ">{{ $element->kode }}</td>
                                    <td class=" ">{{ $element->pelajaran }}</td>
                                    <td>
                                      <div class="row">
                                        <div class="col-md-12 col-md-offset-5">
                                          <div class="col-sm-4">
                                            <button type="button" class="btn btn-success fa fa-edit"></button>
                                          </div>
                                            <form action="{{ route('pelajaran.destroy', [$element->tipe_pelajaran_id, $element->id]) }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger fa fa-trash"></button>
                                            </form>
                                        </div>
                                      </div>
                                    </td>
                                <tr>
                                    @endif
                                  @endforeach
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

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    @if(Session::has('sweetalert'))
      <script>
          swal('Success!!', '{{ Session::get('sweetalert') }}', 'success');
      </script>
      {{-- <?php Session::forget('sweetalert'); ?> --}}
    @endif

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

        {{-- <script>
            $('#jurusan').on('change', function(e){
                console.log(e.target.value);
                var cat_id = e.target.value;
                jQuery.get('/api/konsentrasis/' + cat_id, function(data) {
                    $('#konsentrasi').empty();
                    jQuery.each(data, function(index, obj){
                        $('#konsentrasi').append('<option value="'+ obj.id+'">'+ obj.konsentrasi + " " +  obj.subbagian +' </option>');
                    });
                });
            });
        </script> --}}
  
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