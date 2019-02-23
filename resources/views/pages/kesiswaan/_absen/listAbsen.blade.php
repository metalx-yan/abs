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
                    <h3>Daftar Hadir Siswa<small> SMK Negeri 4 Kota Tangerang</small></h3>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <p>Daftar absen siswa dikelas masing-masing sesuai dengan absen yang setiap hari dilakukan.</a></p>
                    <br>
                    <div class="row">
                            <div class="form-group">
                                    <div class="col-md-3">
                                        <select id="category" name="jurusan_id" class="select2_single form-control" tabindex="-1">
                                            @foreach (App\Model\Kelas\Jurusan::all() as $jur)
                                                <option value="{{ $jur->id }}">{{ $jur->tingkatan->tingkatan }} {{ $jur->jurusan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="subcategory" name="jurusan_id" class="select2_single form-control" tabindex="-1">
                                            {{-- @foreach ($jurusan as $jur) --}}
                                                <option value="{{-- {{ $jur->id }} --}}">{{-- {{ $jur->tingkatan->tingkatan }} {{ $jur->jurusan }} --}}</option>
                                            {{-- @endforeach --}}
                                        </select>
                                    </div>
                            </div> 
                    </div>

                    <br>

         
                    <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <table class="table table-striped projects" id="">
                                        <thead>
                                          <tr>
                                            <th style="width: 1%">No.</th>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>
                                            <th>9</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>13</th>
                                            <th>14</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td class=""></td>
                                                    <td class="" id="nis" style="padding-top: 10px"></td><br>
                                                    <td class="" id="nama"></td>
                                                    <td class="" id="absen"></td>
                                                    <td class="" id="hadir"></td>
                                                </tr>
                                        </tbody>
                                    </table>

                                {{-- <table class="table table-striped projects">
                                    <thead>
                                        <tr>
                                            <th style="width: 20%">Jurusan</th>
                                            <th style="width: 20%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jurusan as $jurusan)
                                        <tr>
                                            <td class="">{{ $jurusan->tingkatan->tingkatan }} {{ $jurusan->jurusan }}</td>
                                            <td style="padding-left: 500px;">
                                                <a class="fa fa-search btn btn-info" href="{{ route('daftarKonsen', $jurusan->id) }}"></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table> --}}

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

@section('scripts')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

 <script>
            $('#category').on('change', function(e){
                console.log(e);
                var a_id = e.target.value;
                jQuery.get('/ajax-subcat?a_id=' + a_id, function(data) {
                    //success data
                    $('#subcategory').empty();
                    jQuery.each(data, function(index, subcatObj){
                        $('#subcategory').append('<option value="'+subcatObj.id+'">'+subcatObj.konsentrasi+' '+subcatObj.subbagian+'</option>');
                    });
                });
            });

            $('#subcategory').on('change', function(e){
                console.log(e);
                var b_id = e.target.value;
                jQuery.get('/ajax-subcaty?b_id=' + b_id, function(data) {
                    //success data
                    $('#nis').empty();
                    jQuery.each(data, function(index, subcatObj){
                        $('#nis').append('<option value="'+subcatObj.id+'">'+subcatObj.nis+'</option>');
                    });
                });
            });

            $('#subcategory').on('change', function(e){
                console.log(e);
                var b_id = e.target.value;
                jQuery.get('/ajax-subcaty?b_id=' + b_id, function(data) {
                    //success data
                    $('#nama').empty();
                    jQuery.each(data, function(index, subcatObj){
                        $('#nama').append('<option value="'+subcatObj.id+'">'+subcatObj.nama+'</option>');
                    });
                });
            });

            $('#subcategory').on('change', function(e){
                console.log(e);
                var b_id = e.target.value;
                jQuery.get('/ajax-absen?b_id=' + b_id, function(data) {
                    //success data
                    $('#hadir').empty();
                    jQuery.each(data, function(index, subcatObj){
                        $('#hadir').append('<option value="'+subcatObj.id+'">'+subcatObj.id+'</option>');
                    });
                });
            });
        </script>

@endsection