@extends('pages.kesiswaan.layouts.main')

@section('content')

{{-- !-- page content --> --}}
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title">
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
          </ul>
            <h3>Tambah Guru <small>SMK Negeri 4 Kota Tangerang</small></h3>
          <div class="clearfix"></div>
        </div>

        {{-- x_content --}}
        <div class="x_content">
          <p>Lengkapi seluruh data yang diperlukan guna memudahkan segala aktfitas dalam penggunaan sistem ini.</a></p>
          <span class="section">Input Data Guru</span>

          <form class="form-horizontal form-label-left" action="{{ route('guru.store') }}" method="POST" novalidate>
            @csrf
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Guru</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" name="guru" id="guru">
                  @foreach (App\Model\Guru\Guru::all() as $guru)
                    <option value="{{ $guru->nama }}">{{ $guru->nama }}</option>
                  @endforeach
                </select>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 col-sm-3 col-xs-12 control-label">Mata Pelajaran </label>

              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="checkbox">
                  <label>
                    @foreach (App\Model\Pelajaran as $element)
                      {{-- expr --}}
                    @endforeach
                    <input type="checkbox" class="flat" checked="checked"> Checked
                  </label>
                </div>
              </div>
            </div>
                      
            
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Bersih</button>
                <button id="send" type="submit" class="btn btn-success">Simpan</button>
              </div>
            </div>
          </form>

        </div>
        {{-- ! x_content --}}

      </div>
    </div>
  </div>
</div>

        <!-- /page content -->
@endsection