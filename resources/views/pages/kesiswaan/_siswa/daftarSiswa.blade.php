@extends('pages.kesiswaan.layouts.main')

@section('links')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">  
@endsection

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_content">
                    <span class="section">Daftar Siswa</span>

                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">No. </th>
                                    <th class="column-title">NIS </th>
                                    <th class="column-title">Nama </th>
                                    <th class="column-title">Telpon Orang Tua </th>
                                    <th class="column-title"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa->siswas as $element)
                                    <tr class="even pointer">
                                        <td class="">{{ $element->id }}</td>
                                        <td class="">{{ $element->nis }}</td>
                                        <td class="">{{ $element->nama }}</td>
                                        <td class="">{{ $element->no_hp_orangtua }}</td>
                                        <td class="">
                                            <div class="row">
                                                <div class="col-md-12 col-md-offset-6">
                                                    <div class="col-md-2">
                                                        <a href="{{ route('siswa.edit', [$element->konsentrasi->id,$element->id]) }}" class="btn btn-success fa fa-edit"></a>
                                                    </div>
                                                    <div class="col-md-2">                                                    
                                                        <form action="{{ route('siswa.destroy', [$element->konsentrasi->id,$element->id]) }}" method="POST">
                                                          @csrf
                                                          @method('DELETE')
                                                            <button type="submit" class="fa fa-trash"></button>
                                                        </form>
                                                    </div>
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
                                    <a href="" class="glyphicon-class">
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                                    <span class="glyphicon-class"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    @if(Session::has('sweetalert'))
      <script>
          swal('Success!!', '{{ Session::get('sweetalert') }}', 'success');
      </script>
      {{-- <?php Session::forget('sweetalert'); ?> --}}
    @endif
  
@endsection