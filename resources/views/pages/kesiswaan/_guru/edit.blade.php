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

                        <form class="form-horizontal form-label-left" action="{{ route('guru.update', $edit->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIP <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nip" name="nip" required="required" value="{{ $edit->nip }}" class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode">Kode <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" value="{{ $edit->kode }}" id="kode" name="kode" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="nama" class="form-control col-md-8 col-xs-12" data-validate-length-range="6" value="{{ $edit->nama }}" name="nama" required="required" type="text">
                                    </div>
                            </div>
                            
                            {{-- <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-8 col-xs-12" name="username" value="{{ $edit->nip }}"  type="hidden">
                                    </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">password <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" class="form-control col-md-8 col-xs-12" name="password"  type="hidden">
                                    </div>
                            </div>
                            --}}
                                <input type="hidden" name="user_id" value="{{ $edit->user_id }}">
                                <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- /page content -->

@endsection