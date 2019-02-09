@extends('pages.guru.layouts.main')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Daftar Kelas</h3>
      </div>
    </div>
    
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
              <table class="data table table-striped no-margin">
                <thead>
                  <tr>
                    <th>Kelas</th>
                    <th>Mata Pelajaran</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach (Auth::user()->guru->mataPelajarans as $mapel)
                  <tr>
                    @php
                      $konsentrasi = $mapel->konsentrasis->find($mapel->pivot->konsentrasi_id);
                    @endphp
                    <td> {{ $konsentrasi->konsentrasi . ' ' . $konsentrasi->subbagian }}</td>
                    <td>{{ $mapel->pelajaran }}</td>
                    <td class="vertical-align-mid">
                      {{ $mapel->pivot->hari }}
                    </td>
                    <td>
                      {{ $mapel->pivot->jam }}
                    </td>
                    <td>
                      @php
                        $time = Carbon\Carbon::parse($mapel->pivot->jam)->addMinute(45);
                      @endphp
                      @if (!$time->isPast())
                        <a href="{{ route('beranda.show', [$konsentrasi->id, $mapel->id, $mapel->pivot->hari]) }}">Absen</a>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
            
        <!-- /page content -->
@endsection