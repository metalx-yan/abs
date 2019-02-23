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
          <h3>Daftar Siswa Hadir <small>SMK Negeri 4 Kota Tangerang</small></h3>
          <div class="clearfix"></div>
        </div>
        {{-- x_content --}}

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                

                  <!-- start project list -->
                  <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 20%">Kelas</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      @foreach ($konsen as $kelas)
                          <td>{{ $kelas->jurusan->tingkatan->tingkatan }} {{ $kelas->konsentrasi }} {{ $kelas->subbagian }}</td>
                          <td style="padding-left: 500px;">
                              <a class="fa fa-search btn btn-info" href="{{ route('daftarSiswa', [$kelas->jurusan->id, $kelas->id]) }}"></a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <!-- end project list -->

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