@extends('pages.guru.layouts.main')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Absen Siswa</h3>
                <p><small> Mata Pelajaran {{ $absen->pelajaran }}, kelas {{ $konsentrasi->konsentrasi . ' ' . $konsentrasi->subbagian }} hari {{ ucwords(($hari)) }}</small></p>
              </div>

              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              


              <div class="clearfix"></div>

              

              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>No.</th>
                            <th class="column-title">NIS </th>
                            <th class="column-title">Nama Siswa </th>
                            @foreach ($konsentrasi->pertemuans as $pertemuan)
                              <th class="column-title">{{ $pertemuan->pertemuan }}</th>
                            @endforeach
                              <th class="column-title">{{ $konsentrasi->pertemuans->count() + 1 }}</th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @php
                            $i = 1;
                          @endphp
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
                                  @if ($konsentrasi->pertemuans->count() == $pertemuan->pertemuan))
                                    <td>
                                      <input id="{{ '1-' .$siswa->id }}" type="checkbox" class="flat" 
                                        {{ is_null($siswa->absens->where('pertemuan', 1)->first()) ? '' : 'checked="true"' }}
                                        name="siswa[]" value="{{ $siswa->id }}">
                                    </td>
                                  @endif
                                  @empty
                                  <td>
                                    <input id="{{ '1-' .$siswa->id }}" type="checkbox" class="flat" 
                                      {{ is_null($siswa->absens->where('pertemuan', 1)->first()) ? '' : 'checked="true"' }}
                                      name="siswa[]" value="{{ $siswa->id }}">
                                  </td
                                @endforelse
                              </tr>
                              @php
                                $i++;
                              @endphp
                            @endforeach
                        </tbody>
                      </table>

                      <form method="POST" action="{{ route('beranda.store') }}">
                        @csrf
                        <div id="siswa">
                        </div>
                        <input type="hidden" name="konsentrasi_id" value="{{ $absen->id }}">
                        <input type="hidden" name="mata_pelajaran_id" value="{{ $konsentrasi->id }}">
                        <button type="hidden" class="btn btn-success">Simpan</button>
                      </form>
                    </div>
                    <br>
                     <div class="x_panel">
                            <div class="x_title">
                                <div class="x_content">
                                    <span class="section">Daftar Kelas</span>
                                </div>
                                <table class="table table-striped jambo_table bulk_action">
                                  <thead>
                                    <tr class="headings">
                                      <th class="column-title">No. </th>
                                      <th class="column-title">NIS </th>
                                      <th class="column-title">Nama Siswa </th>
                                      <th class="column-title">Alasan Tidak Hadir </th>
                                      <th class="column-title no-link last"><span class="nobr"></span></th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    @php
                                      $pijet = 1;
                                    @endphp
                                    @if (!is_null($konsentrasi->pertemuans()->orderBy('created_at', 'desc')->first()))
                                      @foreach ($konsentrasi->pertemuans()->orderBy('created_at', 'desc')->first()->absensis as $absensi)
                                      <tr class="even pointer">
                                        <td class="">{{ $pijet }}</td>
                                        <td class="">{{ $absensi->siswa->nis }}</td>
                                        <td class="">{{ $absensi->siswa->nama }}</td>
                                        <td class="">
                                          <div class="row">
                                              <input type="radio" class="flat" name="keterangan-{{ $absensi->siswa->id }}" {{ $absensi->keterangan == 'sakit' ? 'checked' : null }}> Sakit
                                              <input type="radio" class="flat" name="keterangan-{{ $absensi->siswa->id }}" {{ $absensi->keterangan == 'izin' ? 'checked' : null }}> Izin
                                              <input type="radio" class="flat" name="keterangan-{{ $absensi->siswa->id }}" {{ $absensi->keterangan == 'alpha' ? 'checked' : null }}> Tanpa Keterangan
                                          </div>
                                        </td>
                                        <td class=" last">
                                          <button type="button" class="btn btn-success">Ubah Status</button>
                                          @if ($absensi->keterangan == 'alpha')
                                            <button type="button" onclick="kirimSMS({{ $absensi->siswa->id }})" class="btn btn-success">Kirim SMS</button>
                                          @endif
                                        </td>
                                      </tr>
                                      @php
                                        $pijet ++;
                                      @endphp
                                      @endforeach
                                    @endif
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

@push('js_body')
  <script>
      console.log('Script Load');

      @foreach ($konsentrasi->siswas as $siswa)
        @php
          $i = 1;
        @endphp
        $(`#{{ $i }}-{{ $siswa->id }}`).on('ifChecked', function () {
          absen({{ $siswa->id }});
        });
        @php
          $i++;
        @endphp
      @endforeach

      function absen(siswa) {
        console.log('Submit absen ' + siswa);
        $('#siswa').append('<input type="hidden" name="siswa[]" value="' + siswa + '">');
      };

      function kirimSMS(id) {
        console.log("Sending SMS");
        $.post('http://monitoring-absen.test/api/siswa/' + id + '/sms/harian/bolos', function( data ) {
          console.log(data);
        });
      };

  </script>
@endpush