@extends('pages.kesiswaan.layouts.main')

@section('content')

<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
          </ul>
            <h3>Data Guru <small>SMK Negeri 4 Kota Tangerang</small></h3>
          <div class="clearfix"></div>
        </div>

        {{-- x_content --}}
        <div class="x_content">

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="x_panel">
                  <div class="x_title">
                      <div class="x_content">
                      </div>


                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">NIP </th>
                            <th class="column-title">Kode </th>
                            <th class="column-title">Nama </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Username </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span></th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            <td class=" ">{{ $guru->nip }}</td>
                            <td class=" ">{{ $guru->kode }}</td>
                            <td class=" ">{{ $guru->nama }}</td>
                            <td class=" ">{{ $guru->email }}</td>
                            <td class=" ">{{ $guru->username }}</td>


                            <td class=" last">

                            </td>
                          <tr>
                          </tr>
                          </tr>
                        </tbody>
                      </table>

                  </div>

              </div>

            </div>
          </div>
        </div>
        {{-- ! x_content --}}
        @forelse ($guru->mataPelajarans as $mapel)
        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
          <div class="well profile_view">
            <div class="col-sm-10">
              <h4 class="brief"><i>Mata Pelajaran : {{ $mapel->pelajaran }}</i></h4>
              <div class="left col-xs-7">
                <h2>Hari : {{ $mapel->pivot->hari }}</h2>
                <p><strong>Total Jam : {{ $mapel->total_jam }}</strong> </p>
              </div>
            </div>
            <div class="col-xs-12 bottom text-center">
              <div class="col-xs-12 col-sm-6 emphasis">
              </div>
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
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br />
                <form class="form-horizontal form-label-left" action="{{ route('guru.mata_pelajaran', $guru->id) }}" method="post">
                  @csrf
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-6">Konsentrasi</label>
                    <div class="col-md-6 col-sm-3 col-xs-12">
                      <select class="form-control" name="konsentrasi_id">
                      @foreach ($konsentrasi as $k)
                        <option value="{{ $k->id }}">{{ $k->subbagian . ' - ' . $k->konsentrasi }}</option>
                      @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-6">Mata Pelajaran</label>
                    <div class="col-md-6 col-sm-3 col-xs-12">
                      <select class="form-control" name="mata_pelajaran_id">
                      @foreach (App\Model\Pelajaran\MataPelajaran::all() as $pelajaran)
                        <option value="{{ $pelajaran->id }}">{{ $pelajaran->pelajaran }}</option>
                      @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12 control-label">Hari
                      <br>
                    </label>

                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hari[]" class="flat" value="senin"> Senin
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hari[]" class="flat" value="selasa"> Selasa
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hari[]" class="flat" value="rabu"> Rabu
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hari[]" class="flat" value="kamis"> Kamis
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="hari[]" class="flat" value="jumat"> Jumat
                      </div>
                      

                  {{-- <div class="ln_solid"></div> --}}
                  <div class="form-group">
                    <hr class="col-md-8 col-sm-9 col-xs-12">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-7">
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

<!-- /page content -->

@endsection