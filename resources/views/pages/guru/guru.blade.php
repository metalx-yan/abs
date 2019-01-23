@extends('pages.guru.layouts.main')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Profil Guru</h3>
      </div>
    </div>
    
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Persentase Ketidakhadrian <small>Kelas di SMK Negeri 4 Kota Tangerang</small></h2>
              <table class="data table table-striped no-margin">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Konsentrasi</th>
                    <th>Jurusan</th>
                    <th class="hidden-phone">Jumlah Siswa</th>
                    <th>Persentase</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>11 RPL 2</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td class="hidden-phone">40</td>
                    <td class="vertical-align-mid">
                      <div class="progress">
                        <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>12 TPM 1</td>
                    <td>Deveint Inc</td>
                    <td class="hidden-phone">38</td>
                    <td class="vertical-align-mid">
                      <div class="progress">
                        <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>10 TKR 3</td>
                    <td>Deveint Inc</td>
                    <td class="hidden-phone">35</td>
                    <td class="vertical-align-mid">
                      <div class="progress">
                        <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                      </div>
                    </td>
                  </tr>
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