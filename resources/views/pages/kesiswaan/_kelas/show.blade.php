@extends('pages.kesiswaan.layouts.main')

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
                                                    <th class="column-title">Tingkatan</th>
                                                    <th class="column-title">Jurusan</th>
                                                    <th class="column-title">Konsentrasi</th>
                                                    <th class="column-title">Kelas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="even pointer">
                                                    <td class=" ">{{ $kelas->jurusan->tingkatan->tingkatan }}</td>
                                                    <td class=" ">{{ $kelas->jurusan->jurusan }}</td>
                                                    <td class=" ">{{ $kelas->konsentrasi }}</td>
                                                    <td class=" ">{{ $kelas->jurusan->tingkatan->tingkatan }} {{ $kelas->konsentrasi }} {{ $kelas->subbagian }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                          </div>
                     </div>
                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Atur Pelajaran Kelas</h2>
                                <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" action="{{ route('kelas.attach.mapel', [$jurusan->id, $kelas->id]) }}" method="post">
                                @csrf
                                <div class="form-group col-md-12">
                                    <label class="col-md-5 col-sm-12 col-xs-12 control-label">Mata Pelajaran</label>
                                        <div class="col-md-6 col-sm-9 col-xs-12">
                                            @foreach (App\Model\Pelajaran\MataPelajaran::all() as $pelajaran)
                                                <div class="checkbox">
                                                    <input type="checkbox" name="mapel[]" class="flat" value="{{ $pelajaran->id }}"> 
                                                        {{ $pelajaran->pelajaran }}
                                                </div>
                                            @endforeach
                                        </div>
                                </div>
                                <div class="item form-group">
                                    <div class="row">
                                        <label class="control-label col-md-5 col-sm-3 col-xs-12" for="kode">Tahun Ajaran</label>
                                            <input type="text" id="email" name="tahun_awal" required="required" class="col-md-1" maxlength="4" minlength="4">
                                                <div class="col-md-1 col-sm-1 col-xs-1">
                                                    <p class="lead text-center">/</p>
                                                </div>
                                            <input type="text" id="email" name="tahun_akhir" required="required" class="col-md-1" maxlength="4" minlength="4">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <hr>
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
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
@endsection