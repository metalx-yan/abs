@extends('pages.kesiswaan.layouts.main')

@section('links')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">  
@endsection

@section('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <h3>Data Guru <small>SMK Negeri 4 Kota Tangerang</small></h3>
                        <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <div class="x_content"></div>
                                        <table class="table table-striped jambo_table bulk_action">
                                            <thead>
                                                <tr class="headings">
                                                    <th class="column-title">NIP </th>
                                                    <th class="column-title">Kode </th>
                                                    <th class="column-title">Nama </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="even pointer">
                                                  <td class=" ">{{ $guru->nip }}</td>
                                                  <td class=" ">{{ $guru->kode }}</td>
                                                  <td class=" ">{{ $guru->nama }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @forelse ($guru->mataPelajarans as $mapel)
                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                            <div class="well profile_view">
                                <div class="col-sm-10">
                                    <h4 class="brief"><i>Mata Pelajaran : {{ $mapel->pelajaran }}</i></h4>
                                        <div class="left col-xs-7">
                                            <h2>Hari : {{ $mapel->pivot->hari }}</h2>
                                        </div>
                                </div>
                                <div class="col-xs-12 bottom text-center">
                                    <div class="col-xs-12 col-sm-6 emphasis">
                                        <button type="button" class="btn btn-primary btn-xs">
                                            <i class="fa fa-user"> </i> Edit Pelajaran
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>            
                        @empty
                        <p class="lead">Mata Pelajaran belum diatur untuk guru ini</p>
                    @endforelse

                    <div class="col-md-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Atur Pelajaran Guru</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                    </ul>
                                    <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                    <form class="form-horizontal form-label-left" action="{{ route('guru.mata_pelajaran', $guru->id) }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-6">Kelas</label>
                                                <div class="col-md-6 col-sm-3 col-xs-12">
                                                    <select class="form-control" name="konsentrasi_id" id="konsentrasi">
                                                        <option value="0">-- Pilih --</option>
                                                        @foreach ($konsentrasi as $k)
                                                            <option value="{{ $k->id }}">{{ $k->konsentrasi . ' - ' . $k->subbagian }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-6">Mata Pelajaran</label>
                                                <div class="col-md-6 col-sm-3 col-xs-12">
                                                    <select class="form-control" name="mata_pelajaran_id" id="mata_pelajaran">
                                                        <option value="0">-- Pilih --</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-md-3 col-sm-3 col-xs-12 control-label">Hari</label>
                                                        <div class="col-md-3 col-sm-9 col-xs-12">
                                                            <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="hari[]" class="flat" id="senin" value="senin"> Senin
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="hari[]" class="flat" id="selasa" value="selasa"> Selasa
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="hari[]" class="flat" id="rabu" value="rabu"> Rabu
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="hari[]" class="flat" id="kamis" value="kamis"> Kamis
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="hari[]" class="flat" id="jumat" value="jumat"> Jumat
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-9 col-xs-12 form-group">
                                                <div id="time-cont"></div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <hr>
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button type="submit" class="btn btn-success">Atur</button>
                                                </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js_body')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    @if(Session::has('sweetalert'))
      <script>
          swal('Success!!', '{{ Session::get('sweetalert') }}', 'success');
      </script>
      {{-- <?php Session::forget('sweetalert'); ?> --}}
    @endif
  
    <script>
        $('#konsentrasi').on('change', function(e){
            console.log(e.target.value);
            var cat_id = e.target.value;
            jQuery.get('/api/konsentrasi/' + cat_id + '/mata-pelajaran', function(data) {
                $('#mata_pelajaran').empty();
                jQuery.each(data, function(index, obj){
                    $('#mata_pelajaran').append('<option value="'+ obj.id+'">'+ obj.pelajaran +' </option>');
                });
            });
        });
    </script>

@endpush