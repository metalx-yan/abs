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
            <h3>Tambah Guru <small>SMK Negeri 4 Kota Tangerang</small></h3>
          <div class="clearfix"></div>
        </div>

        {{-- x_content --}}
        <div class="x_content">
          <p>Lengkapi seluruh data yang diperlukan guna memudahkan segala aktfitas dalam penggunaan sistem ini.</a></p>
          <span class="section">Input Data Guru</span>

          <form class="form-horizontal form-label-left" novalidate>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" class="form-control col-md-8 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama" required="required" type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIP <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="email" name="nip" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" name="Kategori">
                  <option>Mata Pelajaran Umum</option>
                  <option>Mata Pelajaran Khusus/Kejuruan</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Mata Pelajaran</label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="table-responsive" multiple="multiple">
                  <table class="table table-striped jambo_table bulk_action">
                    <tbody>
                      <tr class="even pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Pendidikan Agama dan Budi Pekerti</td>
                        </td>
                      </tr>
                      <tr class="odd pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Pendidikan Pancasila dan Kewarganegaraan</td>
                        </td>
                      </tr>
                      <tr class="even pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Bahasa Indonesia</td>
                        </td>
                      </tr>
                      <tr class="odd pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Bahasa Inggris</td>
                        </td>
                      </tr>
                      <tr class="even pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Seni Budaya</td>
                        </td>
                      </tr>
                      <tr class="odd pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Pendidikan Jasmani, Olahraga dan Kesehatan</td>
                        </td>
                      </tr>
                      <tr class="even pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Fisika</td>
                        </td>
                      </tr>
                      <tr class="odd pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Kimia</td>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Mata Pelajaran</label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="table-responsive" multiple="multiple">
                  <table class="table table-striped jambo_table bulk_action">
                    <tbody>
                      <tr class="even pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Pendidikan Agama dan Budi Pekerti</td>
                        </td>
                      </tr>
                      <tr class="odd pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Pendidikan Pancasila dan Kewarganegaraan</td>
                        </td>
                      </tr>
                      <tr class="even pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Bahasa Indonesia</td>
                        </td>
                      </tr>
                      <tr class="odd pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Bahasa Inggris</td>
                        </td>
                      </tr>
                      <tr class="even pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Seni Budaya</td>
                        </td>
                      </tr>
                      <tr class="odd pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Pendidikan Jasmani, Olahraga dan Kesehatan</td>
                        </td>
                      </tr>
                      <tr class="even pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Fisika</td>
                        </td>
                      </tr>
                      <tr class="odd pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">Kimia</td>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control">
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                </select>
              </div>
            </div>
           
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Mata Pelajaran</label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="table-responsive" multiple="multiple">
                  <table class="table table-striped jambo_table bulk_action">
                    <tbody>
                      @foreach (App\KelasBagian::all() as $element)
                      <tr class="even pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">{{ $element->jurusan->tingkatan->kelas_siswa }} {{ $element->konsentrasi }} {{ $element->kelas_bagian }}</td>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            
            

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">No. Handphone <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="email" id="email2" name="email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label for="password" class="control-label col-md-3">Password</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
              </div>
            </div>
            <div class="item form-group">
              <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Ulangi Password</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
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