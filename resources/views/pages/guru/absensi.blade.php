
@extends('pages.guru.layouts.main')

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
                    <h3>Daftar Tidak Hadir Siswa <small>SMK Negeri 4 Kota Tangerang</small></h3>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <p>Daftar Tidak Hadir Siswa Dikelasnya Masing-masing sesuai dengan Guru pengajar.</a></p>
                    <span class="section">Daftar Tidak Hadir</span>
                              <form action="{{ route('absensi') }}" method="GET">
                                  @csrf
                                  <div class="col-md-3">
                                      <select id="jurusan" name="mata_pelajaran_id" class="select2_single form-control" tabindex="-1">
                                          <option value="0">--- Pilih ---</option>
                                          @php
                                            $dup = [];
                                          @endphp
                                          @foreach (Auth::user()->guru->mataPelajarans as $mata)
                                              @if (!in_array($mata->pivot->konsentrasi_id, $dup))
                                                <option value="{{ $mata->pivot->konsentrasi_id }}">
                                                    {{ App\Model\Kelas\Konsentrasi::find($mata->pivot->konsentrasi_id)->konsentrasi }}
                                                    {{ App\Model\Kelas\Konsentrasi::find($mata->pivot->konsentrasi_id)->subbagian }}
                                                </option>
                                              @endif
                                              @php
                                                array_push($dup, $mata->pivot->konsentrasi_id);
                                              @endphp
                                          @endforeach
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
                                    $konsentrasi = App\Model\Kelas\Konsentrasi::find(app('request')->input('mata_pelajaran_id'));
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

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
            
        <!-- /page content -->
@endsection