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
                    <h3>Data Kelas  <small>{{ $jurusan->tingkatan->tingkatan }} {{ $jurusan->jurusan }} SMK Negeri 4 Kota Tangerang</small></h3>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <p>Lengkapi seluruh data yang diperlukan guna memudahkan segala aktfitas dalam penggunaan sistem ini.</a></p>
                  <span class="section">Tambah Kelas</span>
                      <div class="row">
                        <form class="form-horizontal form-label-left input_mask" action="{{ route('kelas.store', $jurusan->id) }}" method="POST">
                          @csrf
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Konsentrasi</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" name="konsentrasi" required="required" type="text">
                              </div>
                          </div>
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kelas">Sub Bagian</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12 {{ $errors->has('subbagian') ? 'is-invalid' : ''}}" name="subbagian" required="required" type="text">
                              </div>
                                {!! $errors->first('subbagian', '<span class="invalid-feedback">:message</span>') !!}
                          </div>
                          <input type="hidden" name="jurusan_id" value="">
                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-3">
                                  <button id="send" type="submit" class="btn btn-success">Simpan</button>
                              </div>
                          </div>
                        </form>
                      </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Daftar Kelas<small>SMK Negeri 4 Kota Tangerang</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link col-md-offset-12"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="table-responsive">
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
                                    @foreach ($jurusan->konsentrasis as $konsentrasi)
                                      <tr class="even pointer">
                                        <td class=" ">{{ $konsentrasi->jurusan->tingkatan->tingkatan }}</td>
                                        <td class=" ">{{ $konsentrasi->jurusan->jurusan }}</td>
                                        <td class=" ">{{ $konsentrasi->konsentrasi }}</td>
                                        <td class=" ">{{ $konsentrasi->jurusan->tingkatan->tingkatan }} {{ $konsentrasi->konsentrasi }} {{ $konsentrasi->subbagian }}</td>
                                        <td class="">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <form action="{{ route('kelas.destroy', [$konsentrasi->jurusan->id ,$konsentrasi->id]) }}" method="POST">
                                                          @csrf
                                                          @method("DELETE")
                                                          <button type="submit" class="btn btn-danger fa fa-trash"></button>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-4">
                                                          <a href="{{ route('kelas.show', [$jurusan->id, $konsentrasi->id]) }}" class="btn btn-info fa fa-list-ol"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                      <tr>
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


@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    @if(Session::has('sweetalert'))
      <script>
          swal('Success!!', '{{ Session::get('sweetalert') }}', 'success');
      </script>
      {{-- <?php Session::forget('sweetalert'); ?> --}}
    @endif
    
  
@endsection