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
                    <h3>Daftar Hadir Siswa<small> SMK Negeri 4 Kota Tangerang</small></h3>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <p>Daftar absen siswa dikelas masing-masing sesuai dengan absen yang setiap hari dilakukan.</a></p>
                    <br>
                    <div class="row">
                            <div class="form-group">
                                <form action="{{ route('listAbsen') }}" method="GET">
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

                    <br>

         
                    <div class="clearfix"></div>
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
                                                @foreach ($konsentrasi->pertemuans as $pertemuan)
                                                  <th class="column-title">{{ $pertemuan->pertemuan }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($konsentrasi->siswas as $siswa)
                                            <tr class="even pointer">
                                                <td class="a-center">{{ $i }}</td>
                                                <td>{{ $siswa->nis }}</td>
                                                <td>{{ $siswa->nama }}</td>
                                                @forelse($konsentrasi->pertemuans as $pertemuan)
                                                  <td>
                                                    @if (!is_null($pertemuan->absens->where('siswa_id', $siswa->id)->first()))
                                                      <input type="checkbox" class="flat" disabled="disabled" checked="checked">
                                                      @else
                                                      <input type="checkbox" class="flat" disabled="disabled">
                                                    @endif
                                                  </td>
                                                  @empty
                                                  <td>
                                                    <input id="{{ '1-' .$siswa->id }}" type="checkbox" class="flat" 
                                                      {{ is_null($siswa->absens->where('pertemuan', 1)->first()) ? '' : 'checked="true"' }}
                                                      name="siswa[]" value="{{ $siswa->id }}">
                                                  </td>
                                                @endforelse
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
</div>
        <!-- /page content -->

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