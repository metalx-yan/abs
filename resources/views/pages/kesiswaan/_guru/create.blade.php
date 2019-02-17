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
                    <h3>Data Guru <small>SMK Negeri 4 Kota Tangerang</small></h3>
                        <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <p>Lengkapi seluruh data yang diperlukan guna memudahkan segala aktfitas dalam penggunaan sistem ini.</a></p>
                    <span class="section">Tambah Guru</span>

                        <form class="form-horizontal form-label-left" action="{{ route('guru.store') }}" method="POST">
                            @csrf
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIP <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nip" name="nip" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode">Kode <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="kode" name="kode" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="nama" class="form-control col-md-8 col-xs-12" data-validate-length-range="6" name="nama" required="required" type="text">
                                    </div>
                            </div>
                          
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-8 col-xs-12" data-validate-length-range="6" name="username" required="required" type="text">
                                    </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">password <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-8 col-xs-12" data-validate-length-range="6" name="password" required="required" type="password">
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>

                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Daftar Guru<small>SMK Negeri 4 Kota Tangerang</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link col-md-offset-12"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                        </div>
                        <table class="table table-striped jambo_table bulk_action" align="">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">NIP </th>
                                    <th class="column-title">Kode </th>
                                    <th class="column-title">Nama </th>
                                    <th class="column-title">Username </th>
                                    <th class="column-title no-link last"><span class="nobr"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guru as $guru)
                                    <tr class="even pointer">
                                        <td class=" ">{{ $guru->nip }}</td>
                                        <td class=" ">{{ $guru->kode }}</td>
                                        <td class=" ">{{ $guru->nama }}</td>
                                        <td class=" ">{{ $guru->user->username }}</td>
                                        <td class="last" align="right_col">
                                            <div class="row">
                                                <div class="col-md-12 col-md-offset-6">
                                                    <a href="{{ route('guru.edit', $guru->id) }}" class="fa fa-edit btn btn-success"></a>
                                                    <button type="button" class="fa fa-trash btn btn-danger"></button>
                                                    <a href="{{ route('guru.show', $guru) }}" class="fa fa-list-ol btn btn-info" ></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="bs-glyphicons">
                            <ul class="bs-glyphicons-list">
                                <li>
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                                    <span class="glyphicon-class">Cetak Data Siswa</span>
                                </li>
                            </ul>
                    </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- /page content -->

@endsection