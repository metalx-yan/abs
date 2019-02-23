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
                    <h3>Data Siswa <small> Kelas {{ $jurusan->tingkatan->tingkatan }} {{ $jurusan->jurusan }} SMK Negeri 4 Kota Tangerang</small></h3>
                        <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <p>Lengkapi seluruh data yang diperlukan guna memudahkan segala aktfitas dalam penggunaan sistem ini.</a></p>
                    <span class="section">Tambah Siswa</span>

                        <form class="form-horizontal form-label-left" novalidate action="{{ route('siswa.store', $jurusan->id) }}" method="POST">
                        @csrf
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="konsentrasi_id" class="select2_single form-control {{ $errors->has('konsentrasi_id') ? 'is-invalid' : ''}}" tabindex="-1">
                                        @foreach ($jurusan->konsentrasis as $konsentrasi)
                                            <option value="{{ $konsentrasi->id }}">{{ $konsentrasi->konsentrasi }} {{ $konsentrasi->subbagian }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {!! $errors->first('konsentrasi_id', '<span class="invalid-feedback">:message</span>') !!}
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIS</span></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" id="email" name="nis" required="required" class="form-control col-md-7 col-xs-12 {{ $errors->has('nis') ? 'is-invalid' : ''}}">
                                  </div>
                                {!! $errors->first('nis', '<span class="invalid-feedback">:message</span>') !!}
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama</span></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="name" class="form-control col-md-8 col-xs-12 {{ $errors->has('nama') ? 'is-invalid' : ''}}" name="nama" required="required" type="text">
                                  </div>
                                {!! $errors->first('nama', '<span class="invalid-feedback">:message</span>') !!}
                            </div>

                            <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">No. Telepon Orang Tua </span>
                              </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-8 col-xs-12 {{ $errors->has('no_hp_orangtua') ? 'is-invalid' : ''}}"  name="no_hp_orangtua" required="required" type="text">
                                </div>
                                {!! $errors->first('no_hp_orangtua', '<span class="invalid-feedback">:message</span>') !!}
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
                        
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">Jurusan</th>
                                    <th class="column-title">Konsentrasi</th>
                                    <th class="column-title">Kelas</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jurusan->konsentrasis as $konsentrasi)
                                      <tr class="even pointer">
                                        <td class=" ">{{ $konsentrasi->jurusan->jurusan }}</td>
                                        <td class=" ">{{ $konsentrasi->konsentrasi }}</td>
                                        <td class=" ">{{ $konsentrasi->jurusan->tingkatan->tingkatan }} {{ $konsentrasi->konsentrasi }} {{ $konsentrasi->subbagian }}</td>
                                        <td>
                                          <a class="fa fa-search btn btn-info" href="{{ route('daftarsiswa', [$konsentrasi->jurusan->id ,$konsentrasi->id]) }}"></a>
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