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
                    <h3>Data Siswa <small> Kelas  SMK Negeri 4 Kota Tangerang</small></h3>
                        <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <p>Lengkapi seluruh data yang diperlukan guna memudahkan segala aktfitas dalam penggunaan sistem ini.</a></p>
                    <span class="section">Tambah Siswa</span>

                        <form class="form-horizontal form-label-left" novalidate action="{{ route('siswa.update', [$update->id, $update->Konsentrasi->id]) }}" method="POST">
                        @csrf
                        @method('PUT')   
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIS</span></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" id="email" name="nis" required="required" class="form-control col-md-7 col-xs-12" value="{{ $update->nis }}">
                                  </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama</span></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="name" class="form-control col-md-8 col-xs-12" name="nama" required="required" type="text" value="{{ $update->nama }}">
                                  </div>
                            </div>

                            <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">No. Telepon Orang Tua </span>
                              </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-8 col-xs-12"  name="no_hp_orangtua" required="required" type="text" value="{{ $update->no_hp_orangtua }}">
                                </div>
                            </div>

                            <div class="item form-group">
                            {{-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">No. Telepon Orang Tua </span> --}}
                              </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-8 col-xs-12" name="konsentrasi_id" value="{{ $update->konsentrasi_id }}" type="hidden">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>

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